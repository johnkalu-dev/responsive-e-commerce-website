<?php
  $item_id = $_GET['item_id']??1;
  foreach ($product->getData()as $item):
    if ($item['item_id']== $item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./image/products/1.png"; ?>"alt="product1" class="img-fluid">
                <div class="form-row pt-4 font-size-14 font-baloo">
                    <div class="col">
                        <button type="submit"class="btn btn-danger form-control">Proceed to Cart</button>
                    </div>
                    <div class="col">
                        <button type="submit"class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pt-5">
                <h5 class="font-size-20 font-baloo"><?php echo $item['item_name']??'Unknown';?></h5>
                <small>by <?php echo $item['item_brand']??'Brand';?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#"class="font-rale font-size-14 px-2">4,567 ratings|1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!-- product price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P</td>
                        <td><strike>&#x20A6 45,000</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price</td>
                        <td class="font-size-18 text-danger">&#x20A6 <?php echo $item['item_price']??'0';?></td>
                    </tr>
                    <tr class="font-rale font-size-12">
                        <td>You Saved</td>
                        <td><span class="text-danger">&#x20A6 10,000</span></td>
                    </tr>
                </table>
                <!-- !product price -->

                <!-- policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#"class="font-rale font-size-12">John Kalu <br> Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- !policy -->
                <hr>

                <!-- order-details-->
                <div id="order-details" class="font-rubik d-flex flex-column text-dark">
                    <small>Delivery by:Mar 19 - Mar 27</small>
                    <small>Sold by <a href="#">John Kalu</a> 4.5 out of 5</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 287457</small>
                </div>
                <!-- !order-details-->

                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up" ></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">32GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">64GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !Size -->
            </div>

            <div class="col-12 pt-5">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusantium porro labore assumenda repellat cupiditate, facilis est unde, optio nemo minus quaerat voluptatibus officiis? Excepturi quis dolorem vero dolore voluptatem.</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusantium porro labore assumenda repellat cupiditate, facilis est unde, optio nemo minus quaerat voluptatibus officiis? Excepturi quis dolorem vero dolore voluptatem.</p>
            </div>
        </div>
</section>
<?php
    endif;
    endforeach;
    ?>