スマホ以外から見ています。

<?php echo $count ?>回目のロードです
<script>
alert(<?php echo $count ?>);
</script>
<?php var_dump($_SERVER['HTTP_USER_AGENT']); ?>
