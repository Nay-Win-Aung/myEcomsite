<div class="modal fade" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Levis Jeans</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="images\levis.jpg" alt="Levis Jeans" class="details img-responsive" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>ဒီဂျင်းဘောင်းဘီ လေးကတော့ အရည်အသွေးအထူးကောင်းမွန်ပါတယ် ။ ထိုင်းက တင်သွင်းထားတာ ဖြစ်ပါတယ်</p>
                            <br />
                            <p>စျေးနူန်း : .....ကျပ်</p>
                            <p>Brand : Levis</p>


                            <form action="add_cart.php" method="post" id="add_product_form">
                                <input type="hidden" name="product_id" value="<?= $id; ?>">
                                <input type="hidden" name="available" id="available" value="">
                                <div class="form-group">
                                    <div class="col-xs-3"><label for="quantity">Quantity:</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" min="0">
                                    
                                        <div class="form-group">
                                         <label for="size">Size:</label>                               
                                            <select name="size" id="size" class="form-control">
                                                <option value=""></option>
                                                <option value="28">28</option>
                                                <option value="30">30</option>
                                            </select>
                                            <div><br/></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" type="submit" >add_cart</button>
                    </div>
                </div>
            </div>
        </div>