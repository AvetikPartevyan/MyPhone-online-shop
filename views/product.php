<?php
?>
<div id="product" class="row" data-id="<?= $server[2]?>">

</div>
<script>
    let product = $('#product').data('id')
    $.post('/conf.php',{class: 'Product', method: 'read', product_id: product},function (ev) { 
        console.log(JSON.parse(ev))
        
     })

</script>