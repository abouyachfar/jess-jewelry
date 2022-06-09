<?php

/* __string_template__cb1280bbc52346110cd0266de8389d73b316a3f3ae0cf11c0655273cbb0249cb */
class __TwigTemplate_e2ead30074eb27148a68b355608d8f3c7cfc60d08c43a75f92c96c8fbaf5bcc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produits • JESS JEWELRY</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '1.7.5.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'aa8725c65c27ceed0168275627b5868c';
    var token_admin_orders = '3c5027fa041aa252182030a36c30e680';
    var token_admin_customers = '26571aa5b45ab07ea10f38e3d77406b4';
    var token_admin_customer_threads = 'aed3eb1e61655911954c2ce87a2b695e';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '42dd4aec1990cc91dc2bb1c308efd01f';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin065acgx5b/index.php/improve/modules/catalog/recommended?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/admin065acgx5b/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin065acgx5b/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin065acgx5b\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin065acgx5b/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/admin065acgx5b/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin065acgx5b/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin065acgx5b/themes/default/js/bundle/module/module_card.js?v=1.7.5.0\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/157.245.241.36:8282\\/admin065acgx5b\\/index.php?controller=AdminGamification&token=84838d3a1e68826f46cacf4f0793f089\";
            var current_id_tab = 10;
        </script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminDashboard&amp;token=6c6675a10ee0258b66963cd8ebb2046e\"></a>
    <span id=\"shop_version\">1.7.5.0</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminOrders&amp;token=3c5027fa041aa252182030a36c30e680\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c210f934077dd4643611b1f9cbbee45a\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php/improve/modules/manage?token=af298791aa3e6356a41637ac248569d0\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=63942c3f890fa7f308a310ac7ffe462a\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php/sell/catalog/products/new?token=af298791aa3e6356a41637ac248569d0\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCategories&amp;addcategory&amp;token=e72604eee989479234e7e70ec8460dd9\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"146\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-RXCGV4N0kdbSQrRCVWgX3A\"
        data-post-link=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminQuickAccesses&token=37b0dc5dba82b6269fcf977f323211f1\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminQuickAccesses&token=37b0dc5dba82b6269fcf977f323211f1\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin065acgx5b/index.php?controller=AdminSearch&amp;token=a6748a836c9fa0564228eea33d1fa0b7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://157.245.241.36:8282/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/abdelmalik.bouyachfar%40gmail.com.jpg\" />
      <span>Jess Jewelry</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=42dd4aec1990cc91dc2bb1c308efd01f\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminLogin&amp;logout=1&amp;token=4bf056fbfcd1ec386fe89698f69185a0\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminDashboard&amp;token=6c6675a10ee0258b66963cd8ebb2046e\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminOrders&amp;token=3c5027fa041aa252182030a36c30e680\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminOrders&amp;token=3c5027fa041aa252182030a36c30e680\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin065acgx5b/index.php/sell/orders/invoices/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminSlip&amp;token=3647a5366e108121497e0a9724e895e9\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin065acgx5b/index.php/sell/orders/delivery-slips/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCarts&amp;token=b799a898bb2724d04328feff5d0947a7\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin065acgx5b/index.php/sell/catalog/products?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin065acgx5b/index.php/sell/catalog/products?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCategories&amp;token=e72604eee989479234e7e70ec8460dd9\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminTracking&amp;token=76aa7138ef8c1e940a5706f7efcf1c21\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminAttributesGroups&amp;token=9b30511b66b5e513e3f2dee856ad7dda\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminManufacturers&amp;token=50495e29d1bf3315835759ac4645753c\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminAttachments&amp;token=5013d63dc17d195cae4d32cdfdca8a6d\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCartRules&amp;token=63942c3f890fa7f308a310ac7ffe462a\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin065acgx5b/index.php/sell/stocks/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCustomers&amp;token=26571aa5b45ab07ea10f38e3d77406b4\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCustomers&amp;token=26571aa5b45ab07ea10f38e3d77406b4\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminAddresses&amp;token=1f58ddc3ae45211661e376717c60f78f\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCustomerThreads&amp;token=aed3eb1e61655911954c2ce87a2b695e\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCustomerThreads&amp;token=aed3eb1e61655911954c2ce87a2b695e\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminOrderMessage&amp;token=6ff1b358e602252d98c9ca2e509583c4\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminReturn&amp;token=579498d3dd5b52ab3b2767bbf50414b8\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminMetricsStats&amp;token=b92e433271867e832b6bc9266290d6bf\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminMetricsStats\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminMetricsStats&amp;token=b92e433271867e832b6bc9266290d6bf\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminLegacyStatsMetrics\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminLegacyStatsMetrics&amp;token=ca9ae915b66f27c811d38ec445f2ad9b\" class=\"link\"> Statistiques
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin065acgx5b/index.php/modules/addons/modules/catalog?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin065acgx5b/index.php/modules/addons/modules/catalog?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin065acgx5b/index.php/improve/modules/manage?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminThemes&amp;token=91d809207a2b5160e41bca0394729cc0\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminThemes&amp;token=91d809207a2b5160e41bca0394729cc0\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin065acgx5b/index.php/modules/addons/themes/catalog?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCmsContent&amp;token=f250705b6ed6cd3e626c249a8a9fc79b\" class=\"link\"> Pages de contenu (CMS)
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin065acgx5b/index.php/improve/design/modules/positions/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminImages&amp;token=c1c9e83c62c4d85f1ce897eba3eb7fef\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminLinkWidget&amp;token=61f94630761fe4371a8e7e0e2af610e3\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCarriers&amp;token=5115cc8d315286fff0b065b32c5fbac2\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminCarriers&amp;token=5115cc8d315286fff0b065b32c5fbac2\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin065acgx5b/index.php/improve/shipping/preferences?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin065acgx5b/index.php/improve/payment/payment_methods?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin065acgx5b/index.php/improve/payment/payment_methods?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin065acgx5b/index.php/improve/payment/preferences?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin065acgx5b/index.php/improve/international/localization/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin065acgx5b/index.php/improve/international/localization/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminZones&amp;token=28f9ee63c355655b5ee1c731135d823e\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminTaxes&amp;token=7c1d5e6b8231d3b02822711188fc8f19\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin065acgx5b/index.php/improve/international/translations/settings?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin065acgx5b/index.php/configure/shop/preferences/preferences?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin065acgx5b/index.php/configure/shop/preferences/preferences?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin065acgx5b/index.php/configure/shop/order-preferences/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin065acgx5b/index.php/configure/shop/product-preferences/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin065acgx5b/index.php/configure/shop/customer-preferences/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminContacts&amp;token=79347f652f30425f059f9f77222502a3\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin065acgx5b/index.php/configure/shop/seo-urls/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminSearchConf&amp;token=2dcb002258012fec7f75ee69f40ef003\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminGamification&amp;token=84838d3a1e68826f46cacf4f0793f089\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin065acgx5b/index.php/configure/advanced/system-information/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/system-information/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/performance/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/administration/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/emails/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/import/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminEmployees&amp;token=42dd4aec1990cc91dc2bb1c308efd01f\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminRequestSql&amp;token=a8ff51e551ac1fd3e2ad833318b55337\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin065acgx5b/index.php/configure/advanced/logs/?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminWebservice&amp;token=dcad374a23fcc191e85839312a38aadf\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin065acgx5b/index.php/sell/catalog/products?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\" aria-current=\"page\">Produits</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produits          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin065acgx5b/index.php/sell/catalog/products/new?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\"                  title=\"Créer un nouveau produit : CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>
                  Nouveau produit
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin065acgx5b/index.php/improve/modules/catalog?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\"                title=\"Modules recommandés\"
                              >
                Modules recommandés
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin065acgx5b/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D1.7.5.0%2526country%253Dfr/Aide?_token=I6BU9RrTqzD9ysHp8VFF-RXCGV4N0kdbSQrRCVWgX3A\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1073
        $this->displayBlock('content_header', $context, $blocks);
        // line 1074
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1075
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1076
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1077
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://157.245.241.36:8282/admin065acgx5b/index.php?controller=AdminDashboard&amp;token=6c6675a10ee0258b66963cd8ebb2046e\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=abdelmalik.bouyachfar%40gmail.com&amp;firstname=Jess&amp;lastname=Jewelry&amp;website=http%3A%2F%2F157.245.241.36%3A8282%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin065acgx5b/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=abdelmalik.bouyachfar%40gmail.com&amp;firstname=Jess&amp;lastname=Jewelry&amp;website=http%3A%2F%2F157.245.241.36%3A8282%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1186
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1073
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1074
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1075
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1076
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1186
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__cb1280bbc52346110cd0266de8389d73b316a3f3ae0cf11c0655273cbb0249cb";
    }

    public function getDebugInfo()
    {
        return array (  1265 => 1186,  1260 => 1076,  1255 => 1075,  1250 => 1074,  1245 => 1073,  1236 => 82,  1228 => 1186,  1117 => 1077,  1114 => 1076,  1111 => 1075,  1108 => 1074,  1106 => 1073,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__cb1280bbc52346110cd0266de8389d73b316a3f3ae0cf11c0655273cbb0249cb", "");
    }
}
