<!-- Block ab_homecategories module-->
<div id="abhomecategories_block_home" class="row">
  <div class="block_content">
    {foreach from=$categories item=cat}
        <div class='view view-first home_categorie col-lg-3 col-md-3 col-sm-3'>
          <img src="{$cat.image_url}" alt='{$cat.name}' />
          <span class="home_categorie_title">{$cat.name}</span>
          <div class="mask">
            <h2>{$cat.name}</h2>
            <p>Cliquer pour découvrire plus d'article dans cette catégorie</p>
            <a href="{$cat.url}" class="info" title='{$cat.name}'>Read More</a>
          </div>
        </div>
    {/foreach}
  </div>
</div>
<!-- /Block abhomecategories module -->