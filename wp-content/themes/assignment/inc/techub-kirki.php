<?php

new \Kirki\Panel(
	'assignment_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'assignment Options', 'assignment' ),
		'description' => esc_html__( 'My Panel Description.', 'assignment' ),
	]
);

// section 01
function assignment_header_info_section(){
    new \Kirki\Section(
        'assignment_header_section',
        [
            'title'       => esc_html__( 'Header Info', 'assignment' ),
            'description' => esc_html__( 'My Header Section Description.', 'assignment' ),
            'panel'       => 'assignment_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header Logo', 'assignment' ),
            'description' => esc_html__( 'Please set your header logo', 'assignment' ),
            'section'     => 'assignment_header_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    ); 
} 
assignment_header_info_section();

// footer section
function assignment_footer_info_section(){
    new \Kirki\Section(
        'assignment_footer_section',
        [
            'title'       => esc_html__( 'Footer Info', 'assignment' ),
            'description' => esc_html__( 'My Header Section Description.', 'assignment' ),
            'panel'       => 'assignment_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo',
            'label'       => esc_html__( 'Footer Logo', 'assignment' ),
            'description' => esc_html__( 'Please set your header logo', 'assignment' ),
            'section'     => 'assignment_footer_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    ); 
    // copyright
    new \Kirki\Field\Text(
                [
                    'settings' => 'footer_copyright',
                    'label'    => esc_html__( 'Copyright Text', 'assignment' ),
                    'section'  => 'assignment_footer_section',
                    'default'  => esc_html__( 'Full Copyright & Design By @ Theme pure – 2024', 'assignment' ),
                    'priority' => 10,
                ]
            );
} 
assignment_footer_info_section();
// assignment_header_social
function assignment_header_social_section(){
 new \Kirki\Section(
	'assignment_header_social_section',
	[
		'title'       => esc_html__( 'assignment Social', 'assignment' ),
		'description' => esc_html__( 'My assignment Social Info.', 'assignment' ),
		'panel'       => 'assignment_panel',
		'priority'    => 160,
	]
   );

 new \Kirki\Field\Text(
	[
		'settings' => 'header_facebook_url',
		'label'    => esc_html__( 'Facebook URL', 'assignment' ),
		'section'  => 'assignment_header_social_section',
		'default'  => esc_html__( '#', 'assignment' ),
		'priority' => 10,
	]
  );

    new \Kirki\Field\Text( 
        [
            'settings' => 'header_instagram_url',
            'label'    => esc_html__( 'Instagram URL', 'assignment' ),
            'section'  => 'assignment_header_social_section',
            'default'  => esc_html__( '#', 'assignment' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_twitter_url',
            'label'    => esc_html__( 'Twitter URL', 'assignment' ),
            'section'  => 'assignment_header_social_section',
            'default'  => esc_html__( '#', 'assignment' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
	[
		'settings' => 'header_pinterest_url',
		'label'    => esc_html__( 'Pinterest URL', 'assignment' ),
		'section'  => 'assignment_header_social_section',
		'default'  => esc_html__( '#', 'assignment' ),
		'priority' => 10,
	]
);

}
assignment_header_social_section();


























    // new \Kirki\Field\Checkbox_Switch(
    //     [
    //         'settings'    => 'header_top_switch',
    //         'label'       => esc_html__( 'Header topbar Switch', 'assignment' ),
    //         'description' => esc_html__( 'Header topbar switch control', 'assignment' ),
    //         'section'     => 'assignment_header_section',
    //         'default'     => 'off',
    //         'choices'     => [
    //             'on'  => esc_html__( 'Enable', 'assignment' ),
    //             'off' => esc_html__( 'Disable', 'assignment' ),
    //         ],
    //     ]
    // );

    // new \Kirki\Field\Checkbox_Switch(
    //     [
    //         'settings'    => 'header_right_side_switch',
    //         'label'       => esc_html__( 'Header Right Switch', 'assignment' ),
    //         'description' => esc_html__( 'Header right switch control', 'assignment' ),
    //         'section'     => 'assignment_header_section',
    //         'default'     => 'off',
    //         'choices'     => [
    //             'on'  => esc_html__( 'Enable', 'assignment' ),
    //             'off' => esc_html__( 'Disable', 'assignment' ),
    //         ],
    //     ]
    // );
    
    
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'address_text',
//             'label'    => esc_html__( 'Address Text', 'assignment' ),
//             'section'  => 'assignment_header_section',
//             'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'assignment' ),
//             'priority' => 10,
//         ]
//     );
    
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'address_url',
//             'label'    => esc_html__( 'Address URL', 'assignment' ),
//             'section'  => 'assignment_header_section',
//             'default'  => esc_html__( '#', 'assignment' ),
//             'priority' => 10,
//         ]
//     );
    
//     // email_address 
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'email_address',
//             'label'    => esc_html__( 'Email ID', 'assignment' ),
//             'section'  => 'assignment_header_section',
//             'default'  => esc_html__( 'assignmentinfo@mail.com', 'assignment' ),
//             'priority' => 10,
//         ]
//     );

//     // header_button_text
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_button_text',
//             'label'    => esc_html__( 'Button Text', 'assignment' ),
//             'section'  => 'assignment_header_section',
//             'default'  => esc_html__( 'Get a Quete', 'assignment' ),
//             'priority' => 10,
//         ]
//     );
//     // header_button_url
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_button_url',
//             'label'    => esc_html__( 'Button URL', 'assignment' ),
//             'section'  => 'assignment_header_section',
//             'default'  => esc_html__( '#', 'assignment' ),
//             'priority' => 10,
//         ]
//     );



// }



// // assignment_header_side_section
// function assignment_header_side_section(){
//     new \Kirki\Section(
//         'header_side_info_section',
//         [
//             'title'       => esc_html__( 'Header Offcanvas', 'assignment' ),
//             'description' => esc_html__( 'My Header Section Description.', 'assignment' ),
//             'panel'       => 'assignment_panel',
//             'priority'    => 160,
//         ]
//     );
    
//     new \Kirki\Field\Checkbox_Switch(
//         [
//             'settings'    => 'header_side_info_switch',
//             'label'       => esc_html__( 'Header side info Switch', 'assignment' ),
//             'description' => esc_html__( 'Header side switch control', 'assignment' ),
//             'section'     => 'header_side_info_section',
//             'default'     => 'off',
//             'choices'     => [
//                 'on'  => esc_html__( 'Enable', 'assignment' ),
//                 'off' => esc_html__( 'Disable', 'assignment' ),
//             ],
//         ]
//     );

//     new \Kirki\Field\Checkbox_Switch(
//         [
//             'settings'    => 'header_side_social_switch',
//             'label'       => esc_html__( 'Header Side Social Switch', 'assignment' ),
//             'description' => esc_html__( 'Header Side Social switch control', 'assignment' ),
//             'section'     => 'header_side_info_section',
//             'default'     => 'off',
//             'choices'     => [
//                 'on'  => esc_html__( 'Enable', 'assignment' ),
//                 'off' => esc_html__( 'Disable', 'assignment' ),
//             ],
//         ]
//     );


//     new \Kirki\Field\Image(
//         [
//             'settings'    => 'header_side_logo',
//             'label'       => esc_html__( 'Header Logo', 'assignment' ),
//             'description' => esc_html__( 'Please set your header logo', 'assignment' ),
//             'section'     => 'header_side_info_section',
//             'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
//         ]
//     );

//     new \Kirki\Field\Textarea(
//         [
//             'settings' => 'header_side_content',
//             'label'    => esc_html__( 'Header Side Content', 'assignment' ),
//             'section'  => 'header_side_info_section',
//             'default'  => esc_html__( 'assignment is the partner of choice for many of the world’s leading enterprises. We help businesses development.', 'assignment' ),
//             'priority' => 10,
//         ]
//     );

//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_side_address_text',
//             'label'    => esc_html__( 'Address Text', 'assignment' ),
//             'section'  => 'header_side_info_section',
//             'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'assignment' ),
//             'priority' => 10,
//         ]
//     );
    
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_side_address_url',
//             'label'    => esc_html__( 'Address URL', 'assignment' ),
//             'section'  => 'header_side_info_section',
//             'default'  => esc_html__( '#', 'assignment' ),
//             'priority' => 10,
//         ]
//     );
    
//     // email_address 
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_side_email_address',
//             'label'    => esc_html__( 'Email ID', 'assignment' ),
//             'section'  => 'header_side_info_section',
//             'default'  => esc_html__( 'assignmentinfo@mail.com', 'assignment' ),
//             'priority' => 10,
//         ]
//     );

//     // email_address 
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'header_side_phone',
//             'label'    => esc_html__( 'Phone', 'assignment' ),
//             'section'  => 'header_side_info_section',
//             'default'  => esc_html__( '(+00) 678 345 98568', 'assignment' ),
//             'priority' => 10,
//         ]
//     );



// }
// assignment_header_side_section();

// // assignment_header_social
// function assignment_header_social_section(){
// new \Kirki\Section(
// 	'assignment_header_social_section',
// 	[
// 		'title'       => esc_html__( 'Header Social', 'assignment' ),
// 		'description' => esc_html__( 'My Header Social Info.', 'assignment' ),
// 		'panel'       => 'assignment_panel',
// 		'priority'    => 160,
// 	]
// );

// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'header_facebook_url',
// 		'label'    => esc_html__( 'Facebook URL', 'assignment' ),
// 		'section'  => 'assignment_header_social_section',
// 		'default'  => esc_html__( '#', 'assignment' ),
// 		'priority' => 10,
// 	]
// );

// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'header_instagram_url',
// 		'label'    => esc_html__( 'Instagram URL', 'assignment' ),
// 		'section'  => 'assignment_header_social_section',
// 		'default'  => esc_html__( '#', 'assignment' ),
// 		'priority' => 10,
// 	]
// );

// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'header_twitter_url',
// 		'label'    => esc_html__( 'Twitter URL', 'assignment' ),
// 		'section'  => 'assignment_header_social_section',
// 		'default'  => esc_html__( '#', 'assignment' ),
// 		'priority' => 10,
// 	]
// );

// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'header_pinterest_url',
// 		'label'    => esc_html__( 'Pinterest URL', 'assignment' ),
// 		'section'  => 'assignment_header_social_section',
// 		'default'  => esc_html__( '#', 'assignment' ),
// 		'priority' => 10,
// 	]
// );

// }
// assignment_header_social_section();


// // assignment_header_logo_section 
// function assignment_header_logo_section(){
//     new \Kirki\Section(
//         'assignment_header_logo_section',
//         [
//             'title'       => esc_html__( 'Header Logo', 'assignment' ),
//             'description' => esc_html__( 'My Header Section Description.', 'assignment' ),
//             'panel'       => 'assignment_panel',
//             'priority'    => 160,
//         ]
//     );

//     new \Kirki\Field\Image(
//         [
//             'settings'    => 'header_logo',
//             'label'       => esc_html__( 'Header Logo', 'assignment' ),
//             'description' => esc_html__( 'Please set your header logo', 'assignment' ),
//             'section'     => 'assignment_header_logo_section',
//             'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
//         ]
//     );

// }
// assignment_header_logo_section();

// // assignment_footer_section 
// function assignment_footer_section(){
//     new \Kirki\Section(
//         'assignment_footer_section',
//         [
//             'title'       => esc_html__( 'Footer', 'assignment' ),
//             'description' => esc_html__( 'My Footer Section Description.', 'assignment' ),
//             'panel'       => 'assignment_panel',
//             'priority'    => 160,
//         ]
//     );

//     new \Kirki\Field\Image(
//         [
//             'settings'    => 'footer_bg_img',
//             'label'       => esc_html__( 'Footer BG Image', 'assignment' ),
//             'description' => esc_html__( 'Please set your footer bg image', 'assignment' ),
//             'section'     => 'assignment_footer_section',
//         ]
//     );

//     // footer_copyright 
//     new \Kirki\Field\Text(
//         [
//             'settings' => 'footer_copyright',
//             'label'    => esc_html__( 'Copyright Text', 'assignment' ),
//             'section'  => 'assignment_footer_section',
//             'default'  => esc_html__( 'Full Copyright & Design By @ Theme pure – 2024', 'assignment' ),
//             'priority' => 10,
//         ]
//     );

// }
// assignment_footer_section();