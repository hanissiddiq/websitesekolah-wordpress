<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
?>
<div class="cart-icon-area">
	<a href="<?php echo esc_url( wc_get_cart_url() );?>">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path d="M12.5792 23.6032C11.1244 23.6032 9.9408 24.7868 9.9408 26.2417C9.9408 27.6965 11.1244 28.8801 12.5792 28.8801C14.034 28.8801 15.2176 27.6965 15.2176 26.2417C15.2176 24.7868 14.034 23.6032 12.5792 23.6032ZM12.5792 27.4068C11.9367 27.4068 11.414 26.884 11.414 26.2415C11.414 25.599 11.9367 25.0763 12.5792 25.0763C13.2217 25.0763 13.7445 25.5991 13.7445 26.2415C13.7445 26.8841 13.2217 27.4068 12.5792 27.4068Z" fill="#676767"/>
                <path d="M21.8337 23.6032C20.3789 23.6032 19.1953 24.7868 19.1953 26.2417C19.1953 27.6965 20.3789 28.8801 21.8337 28.8801C23.2886 28.8801 24.4722 27.6965 24.4722 26.2417C24.4721 24.7868 23.2885 23.6032 21.8337 23.6032ZM21.8337 27.4068C21.1912 27.4068 20.6685 26.884 20.6685 26.2415C20.6685 25.599 21.1913 25.0763 21.8337 25.0763C22.4763 25.0763 22.999 25.5991 22.999 26.2415C22.999 26.8841 22.4762 27.4068 21.8337 27.4068Z" fill="#676767"/>
                <path d="M22.4834 9.71222H11.9277C11.5209 9.71222 11.1912 10.042 11.1912 10.4488C11.1912 10.8556 11.521 11.1854 11.9277 11.1854H22.4834C22.8902 11.1854 23.22 10.8556 23.22 10.4488C23.22 10.0419 22.8902 9.71222 22.4834 9.71222Z" fill="#676767"/>
                <path d="M21.9089 13.5372H12.5023C12.0955 13.5372 11.7657 13.867 11.7657 14.2738C11.7657 14.6806 12.0955 15.0104 12.5023 15.0104H21.9088C22.3156 15.0104 22.6454 14.6806 22.6454 14.2738C22.6454 13.8671 22.3156 13.5372 21.9089 13.5372Z" fill="#676767"/>
                <path d="M29.6685 6.43033C29.3876 6.08556 28.9713 5.88787 28.5265 5.88787H5.58273L5.11937 3.63851C5.02263 3.16929 4.70259 2.7753 4.26308 2.58446L1.03005 1.18114C0.656804 1.01901 0.223034 1.19028 0.0611397 1.5634C-0.100931 1.93665 0.0703389 2.37048 0.443406 2.53237L3.6765 3.93575L7.24052 21.2362C7.38091 21.9176 7.98771 22.4121 8.68339 22.4121H26.3299C26.7367 22.4121 27.0664 22.0823 27.0664 21.6755C27.0664 21.2687 26.7367 20.9389 26.3299 20.9389H8.68345L8.24992 18.8345H26.4663C27.1619 18.8345 27.7687 18.3399 27.9091 17.6586L29.9694 7.6581C30.0591 7.22263 29.9494 6.77504 29.6685 6.43033ZM26.4663 17.3614H7.94646L5.88624 7.36098L28.5265 7.36103L26.4663 17.3614Z" fill="#676767"/>
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="30" height="30" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <span class="cart-icon-num">
            <?php echo WC()->cart->get_cart_contents_count();?>
        </span>
    </a>
	<div class="cart-icon-products">
		<?php the_widget( 'WC_Widget_Cart' ); ?>
	</div>
</div>