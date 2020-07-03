<!-- START FOOTER -->
</div>

<?php wp_footer();?>

<!--<img src="/wp-content/themes/radford2020/assets/img/gold-gradient.gif" id="footerimg">-->
<br>


<hr class="footer-hr">


<?php if (!isset($no_breadcrumb)) {
?>

<div class="breadcrumbs">
<?php if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>
<?php } ?>

<footer class="footer">
<div class="grid-x grid-padding-x grid-margin-x align-justify align-middle footer-div">
    <div class="cell small-12 medium-4 large-3 crest-cell">
        <img class="crest" src="/wp-content/themes/radford2020/assets/img/ddb-white-web.png"><br>
    </div>
    <div class="cell small-12 medium-4 large-3 motto-cell">
        <p>Truth</p>
        <p>Compassion</p>
        <p>Wisdom</p>
    </div>
</div>
<p class="madeby">👨&zwj;💻 with ❤ by 🎓 <a href="//willpakpoy.com" target="_blank">Will Pak Poy</a></p>
  <!--<a href="http://twitter.com/radfordact" target="_blank"><img class="socials" src="https://image.flaticon.com/icons/svg/1384/1384017.svg"></a>
  <a href="http://fb.me/radfordact" target="_blank"><img class="socials" src="https://image.flaticon.com/icons/svg/1384/1384005.svg"></a>
  <a href="http://instagram.com/radfordact" target="_blank"><img class="socials" src="https://image.flaticon.com/icons/svg/1384/1384015.svg"></a>
  <div class="footermotto">--><!--<img src="/wp-content/themes/radford2020/assets/img/college-motto.png" id="footermottoimg">Truth<br>Compassion<br>Wisdom</div>-->

</footer>


</body>
</html>
<!-- END FOOTER -->
