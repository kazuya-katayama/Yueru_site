<div class="header-menu-bar">
  <ul class="menu-">
    <?php foreach($contents as $cont_params) {?>
    <li class="menu-case">
      <?php if(isset($cont_params['cont'])) { ?>
      <div class="menu-name"><?php echo $cont_params['name']?></div>
      <ul class="menu-list">
        <?php foreach ($cont_params['cont'] as $key => $value) {?>
          <li class="menu-one">
            <a href="<?php echo $value ?>" class="non-line"><?php echo $key ?></a>
          </li>
        <?php } ?>
      </ul>
    <?php } else { ?>
      <a href="/" class="non-line menu-name"><?php echo $cont_params['name']?></a>
    <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>
