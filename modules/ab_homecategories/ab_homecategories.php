<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class principal du module
 */
class Ab_Homecategories extends Module
{
    private $cats = null;
    private $imageFiles = null;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->name = 'ab_homecategories';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Abdelmalik BOUYACHFAR';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;
 
        parent::__construct();
 
        $this->displayName = $this->l('Module Home Categories');
        $this->description = $this->l('Ce module permet d\'afficher certain catégories sur la page d\'accueil sous format d\'image cliquables');
 
        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');
 
        if (!Configuration::get('AB_HOMECATEGORIES_PAGENAME')) {
            $this->warning = $this->l('Aucun nom fourni');
        }
    }

    /**
     * Methode qui affiche le formulaire de configuration du module sur le backoffice
     * 
     * @return null
     */
    public function getContent()
    {
        $output = null;

        $this->cats = Category::getCategories((int)($this->context->cookie->id_lang), true, false);

        if (isset($_POST['btnSubmit']) && $_POST['btnSubmit']) {
            $this->initConfig();

            foreach($this->cats as $cat)
            {
                if ($cat['id_parent'] >= 2) {
                    if(isset($_POST['categories_' . $cat['id_category']]) && isset($_POST['categories_' . $cat['id_category']]) == 'on')
                    {
                        Configuration::updateValue('categories_' . $cat['id_category'], '1');
                    }
                }
            }

            $all_opts = $this->getOptions();
            $checkbox_options = array();

            foreach ($all_opts as $chbx_options)
                if (Tools::getValue('options_'.(int)$chbx_options['id_checkbox_options']))
                    $checkbox_options[] = $chbx_options['id_checkbox_options'];

            Configuration::updateValue('options', implode(',', $checkbox_options));

            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }
        
        return $output.$this->displayForm();
    }

    /**
     * Construire le formulaire de configuration du module
     * 
     * @return null
     */
    public function displayForm()
    {
        // Récuperer les catégories
        $this->cats = Category::getCategories((int)($this->context->cookie->id_lang), true, false);

        // Préparer le formulaire
        $form_elements = array();
        $form_elements['input'][] = array(
            'type' => 'checkbox',
            'label' => "Catégories",
            'name' => 'categories',
            'values'  => array(
                'query' => $this->getOptions(),
                'id' => 'id_checkbox_options',
                'name'  => 'checkbox_options_name',
                'label' => 'label'
            ),
            'required' => true
        );

        $form_elements['submit'] = array(
            'title' => $this->l('Save'),
            'name'  => 'btnSubmit'
        );

        // Récupère la langue par défaut
        $defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');
    
        // Initialise les champs du formulaire dans un tableau
        $form = array(
            'form' => $form_elements
            );
    
        $helper = new HelperForm();
    
        // Module, token et currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
    
        // Langue
        $helper->default_form_language = $defaultLang;
    
        // Charge la valeur de NS_MONMODULE_PAGENAME depuis la base
        foreach ($this->cats as $cat) {
            if ($cat['id_parent'] >= 2) {
                if(Configuration::get('categories_' . $cat['id_category']) == '1')
                {
                    $helper->fields_value['categories_' . $cat['id_category']] = 1;
                }
            }
        }

        return $helper->generateForm(array($form));
    }

    private function getOptions()
    {
        $options = array();

        foreach ($this->cats as $cat) {
            if ($cat['id_parent'] >= 2) {
                $options[] = array('label' => $cat['name'], 'id_checkbox_options' => $cat['id_category'], 'checkbox_options_name' => $cat['name']);
            }
        }

        return $options;
    }

    private function initConfig()
    {
        foreach ($this->cats as $cat) {
            if ($cat['id_parent'] >= 2) {
                Configuration::updateValue('categories_' . $cat['id_category'], '0');
            }
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('actionFrontControllerSetMedia') &&
            Configuration::updateValue('abhomecategories_NAME', 'AB Home Categories');
    }

    // Définir le hook left column
    public function hookDisplayLeftColumn($params)
    {
        $result = null;
        $categories = Category::getCategories((int)($this->context->cookie->id_lang), true, false);

        foreach ($categories as $cat) {
            if ($cat['id_parent'] >= 2) {
                // Get category object
                $cat_object = new Category($cat['id_category']);
                
                // Get category images
                if ($this->imageFiles === null) {
                    $this->imageFiles = scandir(_PS_CAT_IMG_DIR_);
                }

                //var_dump($this->imageFiles);

                //if (count(preg_grep('/^'.$cat['id_category'].'-([0-9])?_thumb.jpg/i', $this->imageFiles)) > 0) {
                    foreach ($this->imageFiles as $file) {
                        /*if (preg_match('/^'.$cat['id_category'].'-([0-9])?_thumb.jpg/i', $file) === 1) {
                            $image_url = $this->context->link->getMediaLink(_THEME_CAT_DIR_.$file);
                            $cat['image_urls'][] = $image_url;
                        }*/

                        if (strpos($file, $cat['id_category'] . "_thumb.") !== false) {
                            $image_url = $this->context->link->getMediaLink(_THEME_CAT_DIR_.$file);
                            $cat['image_urls'][] = $image_url;
                        }
                    }
                //}

                // Prepare category
                if(Configuration::get('categories_' . $cat['id_category']) == '1')
                {
                    $result[] = ['name' => $cat['name'], 'url' => $cat_object->getLink(), 'image_url' => !empty($cat['image_urls']) ? reset($cat['image_urls']) : $this->_path.'views/img/default.jpg'];
                }
            }
        }

        $this->context->smarty->assign([
            'ab_homecategories_name' => Configuration::get('ABHOMECATEGORIES_NAME'),
            'ab_homecategories_link' => $this->context->link->getModuleLink('ab_homecategories', 'display'),
            'categories' => $result,
        ]);

        return $this->display(__FILE__, 'ab_homecategories.tpl');
    }

    // Définir le hook right column
    public function hookDisplayRightColumn($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    // Définir le hook Home
    public function hookDisplayHome($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    // Définir le hook frontend
    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'abhomecategories-style',
            $this->_path.'views/css/ab_homecategories.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'abhomecategories-javascript',
            $this->_path.'views/js/ab_homecategories.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }
}