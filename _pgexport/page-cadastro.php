<?php
/*
 Template Name: cadastro
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1><?php _e( 'Submit Property', 'pam' ); ?></h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <ul>
                            <li>
                                <a href="index-2.html"><?php _e( 'Index', 'pam' ); ?></a>
                            </li>
                            <li>
                                <span>/</span>
                                <?php _e( 'Submit Property', 'pam' ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i> 
                                <?php _e( '+1-8X0-666-8X88', 'pam' ); ?>
                            </li>
                            <li>
                                <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="submit-property content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notification-box">
                    <h3><?php _e( 'Don\'t Have an Account?', 'pam' ); ?></h3>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.', 'pam' ); ?></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="submit-address">
                    <form method="GET">
                        <h3 class="heading-2"><?php _e( 'Basic Information', 'pam' ); ?></h3>
                        <div class="search-contents-sidebar mb-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Property Title', 'pam' ); ?>
                                        </label>
                                        <input type="text" class="input-text" name="your name" placeholder="Property Title">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Status', 'pam' ); ?>
                                        </label>
                                        <select class="selectpicker search-fields" name="for-sale">
                                            <option>
                                                <?php _e( 'For Sale', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( 'For Rent', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Type', 'pam' ); ?>
                                        </label>
                                        <select class="selectpicker search-fields" name="apartment">
                                            <option>
                                                <?php _e( 'Apartment', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( 'House', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( 'Commercial', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( 'Garage', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( 'Lot', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Area/Location', 'pam' ); ?>
                                        </label>
                                        <input type="text" class="input-text" name="your name" placeholder="SqFt">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Rooms', 'pam' ); ?>
                                        </label>
                                        <select class="selectpicker search-fields" name="1">
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '5', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <?php _e( 'Bathroom', 'pam' ); ?>
                                        </label>
                                        <select class="selectpicker search-fields" name="1">
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '5', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-2"><?php _e( 'Property Gallery', 'pam' ); ?></h3>
                        <div id="myDropZone" class="dropzone dropzone-design mb-50">
                            <div class="dz-default dz-message">
                                <span><?php _e( 'Drop files here to upload', 'pam' ); ?></span>
                            </div>
                        </div>
                        <h3 class="heading-2"><?php _e( 'Location', 'pam' ); ?></h3>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Address', 'pam' ); ?>
                                    </label>
                                    <input type="text" class="input-text" name="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'City', 'pam' ); ?>
                                    </label>
                                    <select class="selectpicker search-fields" name="choose-citys">
                                        <option>
                                            <?php _e( 'Choose Citys', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'New York', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Los Angeles', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Chicago', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Brooklyn', 'pam' ); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'State', 'pam' ); ?>
                                    </label>
                                    <select class="selectpicker search-fields" name="choose-state">
                                        <option>
                                            <?php _e( 'Choose State', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Alabama', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Alaska', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'California', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( 'Colorado', 'pam' ); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-2"><?php _e( 'Detailed Information', 'pam' ); ?></h3>
                        <div class="row mb-50">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label>
                                        <?php _e( 'Detailed Information', 'pam' ); ?>
                                    </label>
                                    <textarea class="input-text" name="message" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Building Age', 'pam' ); ?> 
                                        <span><?php _e( '(optional)', 'pam' ); ?></span>
                                    </label>
                                    <select class="selectpicker search-fields" name="years">
                                        <option>
                                            <?php _e( '0-1 Years', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '0-5 Years', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '0-10 Years', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '0-20 Years', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '0-40 Years', 'pam' ); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Bedrooms (optional)', 'pam' ); ?>
                                    </label>
                                    <select class="selectpicker search-fields" name="1">
                                        <option>
                                            <?php _e( '1', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '2', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '3', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '4', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '5', 'pam' ); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Bathrooms (optional)', 'pam' ); ?>
                                    </label>
                                    <select class="selectpicker search-fields" name="1">
                                        <option>
                                            <?php _e( '1', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '2', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '3', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '4', 'pam' ); ?>
                                        </option>
                                        <option>
                                            <?php _e( '5', 'pam' ); ?>
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-2"><?php _e( 'Features (optional)', 'pam' ); ?></h3>
                        <div class="row mb-40">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                <?php _e( 'Free Parking', 'pam' ); ?>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                <?php _e( 'Air Condition', 'pam' ); ?>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                <?php _e( 'Places to seat', 'pam' ); ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                <?php _e( 'Swimming Pool', 'pam' ); ?>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">
                                                <?php _e( 'Laundry Room', 'pam' ); ?>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6">
                                                <?php _e( 'Window Covering', 'pam' ); ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                <?php _e( 'Central Heating', 'pam' ); ?>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox8" type="checkbox">
                                            <label for="checkbox8">
                                                <?php _e( 'Alarm', 'pam' ); ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-2"><?php _e( 'Contact Details', 'pam' ); ?></h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Name', 'pam' ); ?>
                                    </label>
                                    <input type="text" class="input-text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Email', 'pam' ); ?>
                                    </label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>
                                        <?php _e( 'Phone (optional)', 'pam' ); ?>
                                    </label>
                                    <input type="text" class="input-text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn btn-md button-theme mb-30"><?php _e( 'Preview', 'pam' ); ?></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>