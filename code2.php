<?php
/**
  * Hero include
  */
  $picture = $heroParams['image'];
  $size = $heroParams['size'];
?>

<?php
/* Include form for homepage */

if ($parent ==='home'):?>
  <div class="hero" style="background-image: url(<?= $heroParams['image']; ?>)">
    <div class="container">
      <h1 class="hero-title cf"><?= $heroParams['title']; ?></h1>
    </div>

    <?php include( TEMPLATEPATH . '/includes/components/form-home.php');?>
    <div class="col-xs-12 tac">
      <a href="#main-content" class="scroll-to" data-offset="90">
        <i class="icon">
          <svg width="30" height="30" viewBox="0 0 30 30">
            <use xlink:href="<?= $sprite; ?>#svg-chevron-cercle"></use>
          </svg>
        </i>
      </a>
    </div>
  </div>
<?php else: /* ./Include form for homepage */ ?>