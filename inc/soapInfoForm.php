<div class="card">
    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Soap</strong>
    </h5>

    <div class="card-body px-lg-5">
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="md-form mt-3">
                <input type="text" id="soapName" class="form-control" value="<?php echo get_post_meta(get_the_ID(),'fabula_soap_name',true); ?>">
                <label for="soapName">Soap Name</label>
            </div>

            <div class="md-form">
                <input type="money" id="soapPrice" class="form-control" value="<?php echo get_post_meta(get_the_ID(),'fabula_soap_price',true); ?>">
                <label for="soapPrice">Soap Price</label>
            </div>

            <div class="md-form">
                <input type="text" id="soapDescription" min="100" class="form-control" value="<?php echo get_post_meta(get_the_ID(),'fabula_soap_description',true); ?>">
                <label for="soapDescription">Soap Description</label>
            </div>
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Submit</button>
        </form>
    </div>

</div>
