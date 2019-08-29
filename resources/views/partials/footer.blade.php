<div id="footer-content">
    Copyright &copy; <?php echo date('Y'); ?> Bobba Hotel - All rights reserved.<br />
    Design by <b>Sonay</b> for <b>Luminia</b>
</div>
</div>
</div>
</body>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="application/javascript" src="web/js/alertify.js"></script>
<script type="application/javascript" src="web/js/alertify.min.js"></script>
<script>

$.ajax({
    url:'/api/online-count'
}).done(result => {
    $('#online-count').text(result);
})

setInterval(() => {
    $.ajax({
        url:'/api/online-count'
    }).done(result => {
        $('#online-count').text(result);
    })
    
}, 2000);
</script>
</html>