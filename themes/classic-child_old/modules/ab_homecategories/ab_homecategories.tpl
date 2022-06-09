<!-- Block ab_homecategories module-->
<div id="abhomecategories_block_home" class="row">
  <div class="block_content">
    {foreach from=$categories item=cat}
      <div class='home_categorie col-lg-3 col-md-3 col-sm-3'>
        <a href='{$cat.url}' title='{$cat.name}'>
          <img src='{$cat.image_url}' alt='{$cat.name}' class='home_categorie_img'/>
          <p class='home_categorie_title'>{$cat.name}</p>
        </a>
      </div>
    {/foreach}
  </div>
</div>
<!-- /Block abhomecategories module -->