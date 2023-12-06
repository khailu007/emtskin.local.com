<?php




function pix_templates_image_carousel(){
    $templates = array();

    // crypto

    $data = array(); // Create new array
    $data['name'] = __( 'Image carousel Crypto', 'essentials-core' ); // Assign name for your custom template
    $data['weight'] = 0; // Weight of your template in the template list
    $data['type'] = 'default_templates'; // Weight of your template in the template list
    $data['category'] = 'default_templates'; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/crypto-image-carousel.png', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content'; // CSS class name
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_bg_grdient="bg-gradient-primary"][vc_row full_width="stretch_row" css=".vc_custom_1590711282430{padding-top: 80px !important;}"][vc_column][pix_badge bold="font-weight-bold" secondary_font="" text_color="dark-opacity-5" bg_color="primary" style="" hover_effect="" add_hover_effect="" animation="fade-in-left" element_div="text-center" padding="" text="Stunning Image Carousel" css=".vc_custom_1590713726671{border-top-width: 2px !important;border-right-width: 2px !important;border-bottom-width: 2px !important;border-left-width: 2px !important;padding-top: 7px !important;padding-right: 12px !important;padding-bottom: 7px !important;padding-left: 12px !important;border-left-color: #e9ecef !important;border-right-color: #e9ecef !important;border-top-color: #e9ecef !important;border-bottom-color: #e9ecef !important;}" delay="600"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" position="center" size="h2" text_color="white" max_width="800px" css=".vc_custom_1590711200643{padding-top: 20px !important;}"]Create a website that is perfect for sales and marketing.[/sliding-text][pix_text size="text-20" content_color="light-opacity-7" position="text-center" animation="fade-in-up" max_width="600px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][pix_button btn_text="Get Essentials today" btn_style="underline" btn_color="white" btn_remove_padding="no-padding" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_position="after" btn_icon_animation="yes" btn_div="text-center" btn_animation="fade-in-up" btn_link="https://pixfort.website/redirect?to=essentials" btn_icon="pixicon-angle-right" btn_anim_delay="400"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" bottom_divider_select="8" b_2_is_gradient="true" b_2_color="#e9ecef" b_3_is_gradient="true" b_3_color="rgba(233,236,239,0.3)" b_3_color_2="rgba(248,249,250,0.01)" css=".vc_custom_1590711905942{padding-bottom: 60px !important;}"][vc_column css=".vc_custom_1590711921348{margin-top: 40px !important;}"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/cryptocurrency/wp-content/uploads/sites/12/2020/05/image-carousel-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/cryptocurrency/wp-content/uploads/sites/12/2020/05/image-carousel-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/cryptocurrency/wp-content/uploads/sites/12/2020/05/image-carousel-3.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/cryptocurrency/wp-content/uploads/sites/12/2020/05/image-carousel-4.jpg%22%7D%5D" rounded_img="rounded-xl" animation="fade-in-up" slider_num="3" slider_style="pix-opacity-slider" slider_effect="pix-fade-out-effect" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" cellpadding="pix-p-20" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="3" hover_effect="" add_hover_effect="1"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // bold

    $data = array(); // Create new array
    $data['name'] = __( 'Highlight content Bold', 'essentials-core' ); // Assign name for your custom template
    $data['weight'] = 0; // Weight of your template in the template list
    $data['type'] = 'default_templates'; // Weight of your template in the template list
    $data['category'] = 'default_templates'; // Weight of your template in the template list
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/bold-highlight-content.png', __FILE__ ) ); // Always use preg replace to be sure that "space" will not break logic. Thumbnail should have this dimensions: 114x154px
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content'; // CSS class name
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row_content" pix_over_visibility="" css=".vc_custom_1592355983764{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row pix_bg_grdient="bg-gradient-dark" pix_scale_in="pix-scale-in-sm" css=".vc_custom_1592356031563{padding-top: 80px !important;padding-bottom: 80px !important;border-radius: 10px !important;}" el_class="mx-0 pix-mx-15"][vc_column offset="vc_col-md-offset-3 vc_col-md-6" css=".vc_custom_1592059066798{border-radius: 10px !important;}"][pix_badge bold="font-weight-bold" secondary_font="secondary-font" text_color="dark-opacity-7" bg_color="gradient-primary" style="6" hover_effect="" add_hover_effect="" animation="fade-in" padding="" text="LIMITED TIME DISCOUNT" css=".vc_custom_1592065868353{border-top-width: 2px !important;padding-top: 12px !important;padding-right: 15px !important;padding-bottom: 12px !important;padding-left: 15px !important;border-radius: 5px !important;}"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" text_color="white" css=".vc_custom_1592065864835{padding-top: 20px !important;}"]Build a business with affordable prices.[/sliding-text][pix_text size="text-24" content_color="light-opacity-7" animation="fade-in-up" max_width="700px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][vc_row_inner css=".vc_custom_1592054262034{padding-top: 30px !important;}"][vc_column_inner width="1/2"][pix_text size="text-20" bold="font-weight-bold" secondary_font="secondary-font" content_color="white" animation="fade-in-up" max_width="700px" delay="1000"]It’s a magical piece of glass.
It’s so fast most PC laptops can’t catch up.[/pix_text][pix_text bold="font-weight-bold" content_color="light-opacity-7" animation="fade-in-up" max_width="700px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][/vc_column_inner][vc_column_inner width="1/2"][pix_text size="text-20" bold="font-weight-bold" secondary_font="secondary-font" content_color="white" animation="fade-in-up" max_width="700px" delay="1000"]It’s a magical piece of glass.
It’s so fast most PC laptops can’t catch up.[/pix_text][pix_text bold="font-weight-bold" content_color="light-opacity-7" animation="fade-in-up" max_width="700px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][/vc_column_inner][/vc_row_inner][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/bold/wp-content/uploads/sites/13/2020/06/slider-image-1.png%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/bold/wp-content/uploads/sites/13/2020/06/slider-image-2.png%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/bold/wp-content/uploads/sites/13/2020/06/slider-image-3.png%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/bold/wp-content/uploads/sites/13/2020/06/slider-image-4.png%22%7D%5D" rounded_img="rounded-10" slider_num="1" slider_effect="pix-circular-left" prevnextbuttons="" pagedots="1" dots_style="light-dots" freescroll="" cellalign="left" slider_scale="" cellpadding="pix-p-20" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="" hover_effect="" add_hover_effect="2" css=".vc_custom_1592067033348{margin-top: 60px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // product

    $data = array();
    $data['name'] = __( 'Image carousel Product', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/product-image-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1591493889089{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row full_width="stretch_row"][vc_column css=".vc_custom_1590711921348{margin-top: 40px !important;}"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/product/wp-content/uploads/sites/23/2020/06/carousel-image-3.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/product/wp-content/uploads/sites/23/2020/06/carousel-image-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/product/wp-content/uploads/sites/23/2020/06/carousel-image-4.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/product/wp-content/uploads/sites/23/2020/06/carousel-image-1.jpg%22%7D%5D" rounded_img="rounded-xl" animation="fade-in-up" slider_num="1" slider_style="pix-opacity-slider" prevnextbuttons="" pagedots="1" freescroll="" cellalign="left" slider_scale="pix-slider-scale" cellpadding="pix-p-20" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="3" hover_effect="" add_hover_effect="1" css=".vc_custom_1591493721015{padding-bottom: 30px !important;}"][/vc_column][/vc_row][vc_row content_placement="middle" css=".vc_custom_1591436044122{padding-top: 60px !important;}"][vc_column content_align="text-center" css=".vc_custom_1591436052871{padding-right: 30px !important;padding-left: 30px !important;}"][content_box style="" hover_effect="" add_hover_effect="" rounded_box="rounded-10" animation="fade-in-up" css=".vc_custom_1589839877849{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 20px !important;padding-right: 40px !important;padding-bottom: 20px !important;padding-left: 40px !important;background-color: #ffffff !important;border-left-color: #e9ecef !important;border-left-style: solid !important;border-right-color: #e9ecef !important;border-right-style: solid !important;border-top-color: #e9ecef !important;border-top-style: solid !important;border-bottom-color: #e9ecef !important;border-bottom-style: solid !important;}"][vc_row_inner css=".vc_custom_1591435919226{padding-top: 40px !important;padding-bottom: 20px !important;}"][vc_column_inner width="1/3"][pix_feature media_type="duo_icon" title_bold="font-weight-bold" title_secondary_font="secondary-font" content_size="text-18" content_color="body-default" pix_duo_icon="done-circle" icon_color="gray-5" padding_content="10px" content_align="center" animation="fade-in-up" title="Up to 5 team members" delay="200" css=".vc_custom_1591423682801{padding-top: 20px !important;padding-bottom: 20px !important;}"]Combine seamlessly fitting layouts and components using pixfort builder.[/pix_feature][/vc_column_inner][vc_column_inner width="1/3"][pix_feature media_type="duo_icon" title_bold="font-weight-bold" title_secondary_font="secondary-font" content_size="text-18" content_color="body-default" pix_duo_icon="active-call" icon_color="gray-5" padding_content="10px" content_align="center" animation="fade-in-up" title="Regular free backups" delay="400" css=".vc_custom_1591423665380{padding-top: 20px !important;padding-bottom: 20px !important;}"]Combine seamlessly fitting layouts and components using pixfort builder.[/pix_feature][/vc_column_inner][vc_column_inner width="1/3"][pix_feature media_type="duo_icon" title_bold="font-weight-bold" title_secondary_font="secondary-font" content_size="text-18" content_color="body-default" pix_duo_icon="apple-watch" icon_color="gray-5" padding_content="10px" content_align="center" animation="fade-in-up" title="Third party API" delay="600" css=".vc_custom_1591423658898{padding-top: 20px !important;padding-bottom: 20px !important;}"]Combine seamlessly fitting layouts and components using pixfort builder.[/pix_feature][/vc_column_inner][/vc_row_inner][/content_box][/vc_column][/vc_row][vc_row css=".vc_custom_1591434559037{padding-top: 60px !important;}"][vc_column content_align="text-center" offset="vc_col-md-offset-2 vc_col-md-8"][pix_text size="text-sm" bold="font-weight-bold" content_color="body-default" position="text-center" animation="fade-in-up" delay="1200"]Join over +15,000 happy clients![/pix_text][pix_button btn_text="Create an account" btn_color="primary-light" btn_size="lg" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-left" btn_icon="pixicon-user-3" btn_link="https://pixfort.website/redirect?to=essentials" btn_anim_delay="1000"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // beauty

    $data = array();
    $data['name'] = __( 'Single Image carousel left Beauty', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/beauty-image-carousel-left.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1591859967693{background-color: #f8f9fa !important;}"][vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1590714209338{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/2" content_align="text-center"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/04/shipe-image-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/06/shipe-image-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/06/shipe-image-4.jpg%22%7D%5D" rounded_img="rounded-xl" animation="fade-in-up" slider_num="1" slider_effect="pix-circular-slider" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" cellpadding="p-0" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="" visible_y="" visible_overflow="pix-overflow-all-visible" style="" hover_effect="" add_hover_effect=""][pix_feature_list content_color="body-default" icon_color="body-default" features="%5B%7B%22text%22%3A%22Top%20selling%20product%20by%20pixfort%22%2C%22media_type%22%3A%22icon%22%2C%22pix_duo_icon%22%3A%220%22%2C%22icon%22%3A%22pixicon-arrow-circle-up%22%7D%5D" flist_bold="font-weight-bold" animation="fade-in-up" features_content_align="justify-content-center" css=".vc_custom_1591857150315{padding-top: 10px !important;}"][/vc_column][vc_column width="1/2"][pix_text size="text-20" bold="font-weight-bold" content_color="heading-default" animation="fade-in-up" max_width="500px" delay="1000"]Make Stunning Websites in Minutes![/pix_text][sliding-text bold="font-weight-bold" secondary_font="secondary-font" size="h2" text_color="gradient-primary" max_width="600px"]Create a website that is perfect for every type of business.[/sliding-text][pix_text size="text-20" content_color="body-default" animation="fade-in-up" max_width="500px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][pix_button btn_text="Continue shopping" btn_secondary_font="secondary-font" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_position="after" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-angle-right" btn_link="https://essentials.pixfort.com/beauty/shop" btn_anim_delay="600" css=".vc_custom_1591855412085{margin-top: 10px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    $data = array();
    $data['name'] = __( 'Single Image carousel right Beauty', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/beauty-image-carousel-right.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1591859967693{background-color: #f8f9fa !important;}"][vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1590714209338{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column width="1/2"][pix_text size="text-20" bold="font-weight-bold" content_color="heading-default" animation="fade-in-up" max_width="500px" delay="1000"]Make Stunning Websites in Minutes![/pix_text][sliding-text bold="font-weight-bold" secondary_font="secondary-font" size="h2" text_color="gradient-primary" max_width="600px"]Create a website that is perfect for every type of business.[/sliding-text][pix_text size="text-20" content_color="body-default" animation="fade-in-up" max_width="500px" delay="1000"]This is just a simple text made for this unique and awesome template, you can replace it with any text.[/pix_text][pix_button btn_text="Continue shopping" btn_secondary_font="secondary-font" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_position="after" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-angle-right" btn_link="https://essentials.pixfort.com/beauty/shop" btn_anim_delay="600" css=".vc_custom_1591855412085{margin-top: 10px !important;}"][/vc_column][vc_column width="1/2" content_align="text-center"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/04/shipe-image-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/06/shipe-image-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/beauty/wp-content/uploads/sites/30/2020/06/shipe-image-4.jpg%22%7D%5D" rounded_img="rounded-xl" animation="fade-in-up" slider_num="1" slider_effect="pix-circular-slider" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" cellpadding="p-0" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="" visible_y="" visible_overflow="pix-overflow-all-visible" style="" hover_effect="" add_hover_effect=""][pix_feature_list content_color="body-default" icon_color="body-default" features="%5B%7B%22text%22%3A%22Top%20selling%20product%20by%20pixfort%22%2C%22media_type%22%3A%22icon%22%2C%22pix_duo_icon%22%3A%220%22%2C%22icon%22%3A%22pixicon-arrow-circle-up%22%7D%5D" flist_bold="font-weight-bold" animation="fade-in-up" features_content_align="justify-content-center" css=".vc_custom_1591857150315{padding-top: 10px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // original

    $data = array();
    $data['name'] = __( 'Image carousel Main Original', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/original-main-image-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_bg_grdient="bg-gradient-primary" fade_in_opacity="pix-opacity-2" pix_over_visibility="" fade_in_intro="https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-intro-image.jpg"][vc_row full_width="stretch_row" css=".vc_custom_1588424541312{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="5/12" offset="vc_col-lg-offset-0" el_class="pix-bring-front" css=".vc_custom_1587884564324{padding-top: 50px !important;padding-bottom: 20px !important;}"][pix_numbers numbers_style="numbers-stack" before_secondary_font="secondary-font" number_secondary_font="secondary-font" duration="1000" after_secondary_font="secondary-font" content_bold="" title_color="white" title_size="h1" content_color="body-default" content_size="custom" content_econdary_font="secondary-font" after_econdary_font="secondary-font" number="16000" text_before="+" content_custom_size="16px"][/pix_numbers][sliding-text bold="font-weight-bold" secondary_font="secondary-font" size="h3" text_color="white" css=".vc_custom_1587884457320{padding-top: 10px !important;}"]Happy customers trusted pixfort products![/sliding-text][pix_text size="text-20" content_color="light-opacity-7" animation="fade-in-up" max_width="580px" delay="200"]There are many variations of passages of Lorem Ipsum available, but have suffered alteration.[/pix_text][pix_img style="" hover_effect="" add_hover_effect="" image="https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2019/12/pixfort-logo-white.png" height="40px" css=".vc_custom_1577522750914{padding-top: 30px !important;}"][/vc_column][vc_column width="7/12" css=".vc_custom_1587884575030{padding-top: 20px !important;padding-bottom: 20px !important;}"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/image-carousel-original-1-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/image-carousel-original-3.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/image-carousel-original-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/04/image-carousel-original-4.jpg%22%7D%5D" rounded_img="rounded-10" animation="fade-in-up" slider_num="1" slider_style="pix-opacity-slider" slider_effect="pix-circular-left" prevnextbuttons="" pagedots="1" dots_style="light-dots" freescroll="" slider_scale="pix-slider-scale" autoplay="1" autoplay_time="2500" adaptiveheight="" righttoleft="" slider_wrap="" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="3" hover_effect="3" add_hover_effect="1" autolay="1" autolay_time="2500"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    $data = array();
    $data['name'] = __( 'Image carousel Portfolio item SHOWCASE', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/original-showcase-portfolio-image-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" top_divider_select="19" top_layers="1" t_1_color="#f8f9fa" t_flip_h="true" css=".vc_custom_1593133704187{background-color: #ffffff !important;}" t_custom_height="400px"][vc_row full_width="stretch_row" content_placement="middle" b_flip_h="true" b_custom_height="300px" css=".vc_custom_1593133713254{padding-top: 120px !important;padding-bottom: 120px !important;}"][vc_column width="1/2"][pix_badge bold="font-weight-bold" secondary_font="secondary-font" text_color="heading-default" bg_color="gray-1" style="" hover_effect="" add_hover_effect="" padding="" text="Made by pixfort team" css=".vc_custom_1588693505050{margin-bottom: 20px !important;padding-top: 9px !important;padding-right: 15px !important;padding-bottom: 9px !important;padding-left: 15px !important;}"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" size="h2" text_color="gradient-primary" max_width="600px"]Reinventing the Way you Create Websites.[/sliding-text][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="400"]Creating stunning and professional websites has never been easier, today with Essentials you will be able to build awesome websites in no time![/pix_text][pix_feature_list content_size="text-20" content_color="heading-default" icon_color="gradient-primary" features="%5B%7B%22text%22%3A%22Unlimited%20Possibilities%22%2C%22media_type%22%3A%22duo_icon%22%2C%22pix_duo_icon%22%3A%22thunder-move%22%7D%2C%7B%22text%22%3A%22wooCommerce%20Integration%22%2C%22media_type%22%3A%22duo_icon%22%2C%22pix_duo_icon%22%3A%22cart-1%22%7D%2C%7B%22text%22%3A%22Worldwide%20Services%22%2C%22media_type%22%3A%22duo_icon%22%2C%22pix_duo_icon%22%3A%22earth%22%7D%5D" flist_bold="font-weight-bold"][/vc_column][vc_column width="1/2" css=".vc_custom_1588506530199{margin-bottom: 20px !important;}"][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-8.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-11.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/02/portfolio-5-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-14.jpg%22%7D%5D" rounded_img="rounded-10" pix_tilt="tilt" pix_tilt_size="tilt_big" slider_num="1" slider_style="pix-opacity-slider" slider_effect="pix-circular-left" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="pix-slider-scale" autoplay="1" autoplay_time="2500" adaptiveheight="true" righttoleft="" slider_wrap="" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="6" hover_effect="4" add_hover_effect="7"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    $data = array();
    $data['name'] = __( 'Image carousel Portfolio item CAROUSEL', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/original-image-carousel-portfolio-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1593134310264{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle" css=".vc_custom_1588696441129{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column width="1/2"][sliding-text bold="font-weight-bold" secondary_font="secondary-font" size="h3" text_color="gradient-primary" max_width="500px"]Say Hello to the Most Advanced WordPress Theme Ever Made.[/sliding-text][/vc_column][vc_column width="1/2"][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="400"]Creating stunning and professional websites has never been easier, today with Essentials you will be able to build awesome websites in no time![/pix_text][pix_button btn_text="View Case Study" btn_secondary_font="secondary-font" btn_style="underline" btn_color="yellow" btn_remove_padding="no-padding" btn_text_color="heading-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_link="#" btn_icon="pixicon-arrow-right2"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1588696266677{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-8.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-11.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/02/portfolio-5-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-14.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-12.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/original/wp-content/uploads/sites/4/2020/05/portfolio-9.jpg%22%7D%5D" rounded_img="rounded-10" slider_num="3" slider_effect="pix-fade-out-effect" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" autoplay="1" autoplay_time="2500" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="2" hover_effect="" add_hover_effect=""][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // modern

    $data = array();
    $data['name'] = __( 'Image carousel Modern', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/image_carousel/modern-carousel.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all image_carousel content';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1593134310264{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle" pix_particles_check="" css=".vc_custom_1588696441129{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column width="1/2"][heading title_color="gradient-primary" title_size="h3" position="text-left" title="Say Hello to the Most Advanced WordPress Theme Ever Made." css=".vc_custom_1613424473256{padding-top: 10px !important;padding-bottom: 20px !important;}"][/vc_column][vc_column width="1/2"][pix_text size="text-20" content_color="body-default" animation="fade-in-up" delay="100"]Creating stunning and professional websites has never been easier, today with Essentials you will be able to build awesome websites in no time![/pix_text][pix_button btn_text="View Case Study" btn_secondary_font="secondary-font" btn_style="underline" btn_color="yellow" btn_remove_padding="no-padding" btn_text_color="heading-default" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-right" btn_link="#" btn_icon="pixicon-arrow-right2" btn_anim_delay="200"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" pix_particles_check="" css=".vc_custom_1613424272000{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][pix_img_carousel items="%5B%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-1.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-2.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-3.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-4.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-5.jpg%22%7D%2C%7B%22image%22%3A%22https://essentials.pixfort.com/modern/wp-content/uploads/sites/45/2021/02/carousel-6.jpg%22%7D%5D" slider_num="5" slider_effect="pix-fade-out-effect" prevnextbuttons="" pagedots="1" freescroll="" slider_scale="" autoplay="" adaptiveheight="true" righttoleft="" slider_wrap="true" visible_y="pix-overflow-y-visible" visible_overflow="pix-overflow-all-visible" style="" hover_effect="" add_hover_effect="8"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    return $templates;
}




 ?>