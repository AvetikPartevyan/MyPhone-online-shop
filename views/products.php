<?php
?>
<section id="products">
        <div class="row-products row w100 products">

        </div>
    </div>
</section>
<script>
    $(function () {
        $.post('/conf.php', { class: 'Product', method: 'read' }, function (data) {
            let products = JSON.parse(data);
            products.forEach(e => {

                console.log(e)
                let images = e.image.split(',');
                console.log(images)
                let str = '';
                images.forEach((img, index) => {
                    str += `<div class="sec-col"><img class="sec-img" src=${img}></div>`
                });
                console.log(str)
                let div = `
                <div class="col">
                <div class="wrapper-prod">
                    <img class="prod-img" src="/${images[0]}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">${e.title}</h5>
                        <p class="card-text">${e.description}</p>
                        <a href="#" class="prod-btn">Add to Cart</a>
                        <a href="/product/${e.id}" class="prod-btn">View product</a>
                        <div class="row second-img">
                            ${str}
                        </div>
                    </div>
                </div>
                </div>
            `
                $('.products').append(div);
            });
        })
    })
// $(document).ready(function(){
//     $('.sec-img').click(function(){
//         let smallImages = $(this).attr('src');
//         $('#prod-img').attr('src',smallImages);
//     })
// })

</script>
