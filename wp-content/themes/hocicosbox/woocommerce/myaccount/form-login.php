<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<article class="hb-article-login">
    <div class="container access">
        <div class="row justify-content-center align-self-center">
            <div class="col-5 hb-login-col-left">
                <div class="container-fluid hb-access">
                    <form class="woocommerce-form woocommerce-form-login" method="post">
                        <div class="row">
                            <div class="col text-right">
                                <h2 class="hb-login-title">Acceso</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <label class="hb-login-label" for="username">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <input type="text" class="input-text hb-input-login-text" name="username"
                                       id="username" autocomplete="username"
                                       value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <label class="hb-login-label"
                                       for="password"><?php esc_html_e('Password', 'woocommerce'); ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <input class="hb-input-login-text input-text" type="password" name="password"
                                       id="password" autocomplete="current-password"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right">
                                <?php do_action('woocommerce_login_form'); ?>
                                <a class="hb-lost-pass"
                                   href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <input class="hb-login-check" name="rememberme"
                                       type="checkbox" id="rememberme" value="forever"/>
                                <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                                <button type="submit" class="btn-hb-login text-uppercase" name="login"
                                        value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col text-center">
                            <p class="hb-dont-register">¿Aun no tienes una cuenta?
                                <br><a class="hb-create-from-login" href="#">Crear cuenta</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 hb-login-col-right img-hb-login">
            </div>
        </div>
    </div>
</article>
<!--<div class="container register">-->
<!--    <div class="row justify-content-center align-self-center">-->
<!--        <div class="col-5 hb-login-col-left">-->
<!--            <div class="container-fluid hb-access">-->
<!--                <form class="woocommerce-form woocommerce-form-login" method="post">-->
<!--                    <div class="row">-->
<!--                        <div class="col text-right">-->
<!--                            <h2 class="hb-login-title">Acceso</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            <label class="hb-login-label" for="username">Email</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            <input type="text" class="input-text hb-input-login-text" name="username"-->
<!--                                   id="username" autocomplete="username"-->
<!--                                   value="--><?php //echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?><!--"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            <label class="hb-login-label" for="password">--><?php //esc_html_e('Password', 'woocommerce'); ?><!--</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            <input class="hb-input-login-text input-text" type="password" name="password"-->
<!--                                   id="password" autocomplete="current-password"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-right">-->
<!--                            --><?php //do_action('woocommerce_login_form'); ?>
<!--                            <a class="hb-lost-pass" href="--><?php //echo esc_url(wp_lostpassword_url()); ?><!--">--><?php //esc_html_e('Lost your password?', 'woocommerce'); ?><!--</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            <input class="hb-login-check" name="rememberme"-->
<!--                                   type="checkbox" id="rememberme" value="forever"/>-->
<!--                            <span>--><?php //esc_html_e('Remember me', 'woocommerce'); ?><!--</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col text-left">-->
<!--                            --><?php //wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
<!--                            <button type="submit" class="btn-hb-login text-uppercase" name="login"-->
<!--                                    value="--><?php //esc_attr_e('Log in', 'woocommerce'); ?><!--">--><?php //esc_html_e('Log in', 'woocommerce'); ?><!--</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--                <div class="row">-->
<!--                    <div class="col text-center">-->
<!--                        <p class="hb-dont-register">¿Aun no tienes una cuenta?-->
<!--                            <br><a class="hb-create-from-login" href="#">Crear cuenta</a>-->
<!--                        </p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-6 hb-login-col-right img-hb-login">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	<div class="u-column2 col-12">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
