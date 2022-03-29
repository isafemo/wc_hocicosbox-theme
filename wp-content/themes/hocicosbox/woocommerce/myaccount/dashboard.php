<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' );
?>
<div class="container hb-my-account">
    <div class="row">
        <div class="col">
            <h1>Mi cuenta</h1>
        </div>
    </div>
    <form class="woocommerce-EditAccountForm edit-account" action=""
          method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?> >
        <div class="row">
            <div class="col">
                <h3>Tus datos personales</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?>&nbsp;<span
                                        class="required">*</span></label>
                            <input type="text" class="form-control"
                                   name="account_first_name" id="account_first_name" autocomplete="given-name"
                                   value="<?php echo esc_attr($user->first_name); ?>"/>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="account_last_name"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span
                                        class="required">*</span></label>
                            <input type="text" class="form-control"
                                   name="account_last_name" id="account_last_name" autocomplete="family-name"
                                   value="<?php echo esc_attr($user->last_name); ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="account_display_name"><?php esc_html_e('Display name', 'woocommerce'); ?>
                                &nbsp;<span class="required">*</span></label>
                            <input type="text" class="form-control"
                                   name="account_display_name" id="account_display_name"
                                   value="<?php echo esc_attr($user->display_name); ?>"/>
                            <!--<span><em><?php /*esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' );*/ ?></em></span>-->
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="account_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span
                                        class="required">*</span></label>
                            <input type="email" class="form-control"
                                   name="account_email" id="account_email" autocomplete="email"
                                   value="<?php echo esc_attr($user->user_email); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Cambiar contraseña</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
                            <input type="password" class="form-control woocommerce-Input woocommerce-Input--password input-text"
                                   name="password_current" id="password_current" autocomplete="off" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
                            <input type="password" class="form-control woocommerce-Input woocommerce-Input--password input-text"
                                   name="password_1" id="password_1" autocomplete="off" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
                            <input type="password" class="form-control woocommerce-Input woocommerce-Input--password input-text"
                                   name="password_2" id="password_2" autocomplete="off" />
                        </div>
                        <div class="col align-self-end text-right">
                            <?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
                            <button type="submit" class="woocommerce-Button button"
                                    name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
                            <input type="hidden" name="action" value="save_account_details" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col">
            <h3>Dirección de envío</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?></label>
                            <input type="text" class="form-control"
                                   name="account_first_name" id="account_first_name" autocomplete="given-name"
                                   value="<?php echo esc_attr($userMeta['first_name'][0]); ?>"/>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="account_last_name"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span
                                        class="required">*</span></label>
                            <input type="text" class="form-control"
                                   name="account_last_name" id="account_last_name" autocomplete="family-name"
                                   value="<?php echo esc_attr($userMeta['last_name'][0]); ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="account_first_name">Dirección</label>
                            <input type="text" class="form-control"
                                   name="account_first_name" id="account_first_name" autocomplete="given-name"
                                   value="<?php echo esc_attr($userMeta['shipping_address_1'][0]); ?>"/>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="account_first_name">Ciudad, Provincia</label>
                                    <input type="text" class="form-control"
                                           name="account_first_name" id="account_first_name" autocomplete="given-name"
                                           value="<?php echo esc_attr($userMeta['shipping_city'][0]).','.esc_attr($userMeta['shipping_country'][0]); ?>"/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="account_first_name">CP</label>
                                    <input type="text" class="form-control"
                                           name="account_first_name" id="account_first_name" autocomplete="given-name"
                                           value="<?php echo esc_attr($userMeta['shipping_postcode'][0]); ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="account_first_name">Teléfono*</label>
                            <input type="text" class="form-control"
                                   name="account_first_name" id="account_first_name" autocomplete="given-name"
                                   value="<?php echo esc_attr($userMeta['billing_phone'][0]); ?>"/>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="account_first_name">Email*</label>
                            <input type="text" class="form-control"
                                   name="account_first_name" id="account_first_name" autocomplete="given-name"
                                   value="<?php echo esc_attr($userMeta['billing_email'][0]); ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-right">
                            <button type="submit" class="woocommerce-Button button"
                                    name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
                            <input type="hidden" name="action" value="save_account_details" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Dirección de facturación</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="account_first_name">Nombre y Apellidos o Razón social*</label>
                        <input type="text" class="form-control"
                               name="account_first_name" id="account_first_name" autocomplete="given-name"
                               value="<?php echo esc_attr($userMeta['billing_first_name'][0]); ?>"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="account_last_name">CIF*</label>
                        <input type="text" class="form-control"
                               name="account_last_name" id="account_last_name" autocomplete="family-name"
                               value="<?php echo esc_attr($userMeta['billing_last_name'][0]); ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="account_first_name">Dirección</label>
                        <input type="text" class="form-control"
                               name="account_first_name" id="account_first_name" autocomplete="given-name"
                               value="<?php echo esc_attr($userMeta['billing_address_1'][0]); ?>"/>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label for="account_first_name">Ciudad, Provincia</label>
                                <input type="text" class="form-control"
                                       name="account_first_name" id="account_first_name" autocomplete="given-name"
                                       value="<?php echo esc_attr($userMeta['billing_city'][0]).','.esc_attr($userMeta['billing_country'][0]); ?>"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="account_first_name">CP</label>
                                <input type="text" class="form-control"
                                       name="account_first_name" id="account_first_name" autocomplete="given-name"
                                       value="<?php echo esc_attr($userMeta['billing_postcode'][0]); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="account_first_name">Teléfono*</label>
                        <input type="text" class="form-control"
                               name="account_first_name" id="account_first_name" autocomplete="given-name"
                               value="<?php echo esc_attr($userMeta['billing_phone'][0]); ?>"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="account_first_name">Email*</label>
                        <input type="text" class="form-control"
                               name="account_first_name" id="account_first_name" autocomplete="given-name"
                               value="<?php echo esc_attr($userMeta['billing_email'][0]); ?>"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right">
                        <button type="submit" class="woocommerce-Button button"
                                name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
                        <input type="hidden" name="action" value="save_account_details" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// get the user meta
$userMeta = get_user_meta(get_current_user_id());

// get the form fields
$countries = new WC_Countries();
$billing_fields = $countries->get_address_fields( '', 'billing_' );
$shipping_fields = $countries->get_address_fields( '', 'shipping_' );
?>

<!-- billing form -->
<?php
$load_address_billing = 'billing';
$page_title_billing   = __( 'Billing Address', 'woocommerce' );
?>
<form action="/my-account/edit-address/billing/" class="edit-account" method="post">

    <h2><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title_billing ); ?></h2>

    <?php do_action( "woocommerce_before_edit_address_form_{$load_address_billing}" ); ?>

    <?php foreach ( $billing_fields as $key => $field ) : ?>

        <?php woocommerce_form_field( $key, $field, $userMeta[$key][0] ); ?>

    <?php endforeach; ?>

    <?php do_action( "woocommerce_after_edit_address_form_{$load_address_billing}" ); ?>

    <p>
        <input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
        <?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
        <input type="hidden" name="action" value="edit_address" />
    </p>

</form>

SHIPPING
<!-- shipping form -->
<?php
$load_address = 'shipping';
$page_title   = __( 'Shipping Address', 'woocommerce' );
?>
<form action="/my-account/edit-address/shipping/" class="edit-account" method="post">

    <h2><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h2>

    <?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

    <?php foreach ( $shipping_fields as $key => $field ) : ?>

        <?php woocommerce_form_field( $key, $field, $userMeta[$key][0] ); ?>

    <?php endforeach; ?>

    <?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

    <p>
        <input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
        <?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
        <input type="hidden" name="action" value="edit_address" />
    </p>

</form>



