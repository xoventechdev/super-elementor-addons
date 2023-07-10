<?php


class SAE_Price_Table extends \Elementor\Widget_Base {

	public function get_name() {
		return 'price_table';
	}

	public function get_title() {
		return esc_html__( 'Price Table', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'Price','Table'];
	}

    protected function register_controls() {


		$this->start_controls_section(
			'haeder',
			[
				'label' => esc_html__( 'Header', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'STARTER', 'elementor-addon' ),
				'label_block' => true,
                'placeholder' => 'Type title here',
			]
		);

        $this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Subttitle', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Better for small agency', 'elementor-addon' ),
				'label_block' => true,
                'placeholder' => 'Type subtitle here',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'pricing',
			[
				'label' => esc_html__( 'Pricing', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'price',
			[
				'label' => esc_html__( 'Price', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '10', 'elementor-addon' ),
                'placeholder' => 'Type price here',
			]
		);

        $this->add_control(
			'price_type',
			[
				'label' => esc_html__( 'Select Price Time Period', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'Month' => __( 'Monthly', 'elementor-addon' ),
                    'Year' => __( 'Yearly', 'elementor-addon' ),
                ],
                'default' => 'Month',
			]
		);

        $this->add_control(
			'currency_symbols',
			[
				'label' => esc_html__( 'Select Currency Symbol', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '$' => __( 'Dollar - $', 'elementor-addon' ),
                    '€' => __( 'Euro - €', 'elementor-addon' ),
                    '৳' => __( 'Taka - ৳', 'elementor-addon' ),
                ],
                'default' => '৳',
			]
		);

        $this->end_controls_section();


        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Features', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
            'features',
            [
                'label' => esc_html__( 'Features Title', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
					[
						'name' => 'features_list',
						'label' => esc_html__( 'Features Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '1GB SSD Storage' , 'textdomain' ),
                        'item_title' => __( 'features_list {{index}}', 'elementor-addon' ),
					]
				], 
                'item_title' => __( 'features {{index}}', 'elementor-addon' ),
            ]
        );

        $this->end_controls_section();



        $this->start_controls_section(
			'button',
			[
				'label' => esc_html__( 'Button', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Button Text', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Order', 'elementor-addon' ), 
			]
		);

        $this->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Button Link', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

        $this->end_controls_section();
		
		
		

        $this->start_controls_section(
            'template_control',
            [
                'label' => __( 'Template Control', 'elementor-addon' ),
            ]
        );
        
        $this->add_control(
            'template',
            [
                'label' => __( 'Select Template', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'template-1' => __( 'Template 1', 'elementor-addon' ),
                    'template-2' => __( 'Template 2', 'elementor-addon' ),
                    'template-3' => __( 'Template 3', 'elementor-addon' ),
                ],
                'default' => 'template-2',
            ]
        );

        $this->add_control( 
        	'highlighted',
        	[
        		'label' => esc_html__( 'Highlighted this column?', 'elementor-addon' ),
        		'type' => \Elementor\Controls_Manager::SWITCHER,
        		'default' => 'no',
			]
        );


        
        $this->end_controls_section();
               
    
	}
		

    protected function render() {
	    $settings = $this->get_settings_for_display();
        // print_r($settings);
        $template_select = $settings['template'];
        if ( 'template-1' === $template_select ) {
            ?>


            <div class="container-one">

            <div class='pricing pricing-palden'>
                <div class='pricing-item'>
                    <div class='pricing-deco'>
                        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                        <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&amp;#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&amp;#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                        <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&amp;#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                        <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&amp;#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                        </svg>
                        <div class='pricing-price'><span class='pricing-currency'><?php echo $settings['currency_symbols'] ?></span><?php echo $settings['price'] ?>
                        <span class='pricing-period'><?php echo 'Per '. $settings['price_type'] ?></span>
                        </div>
                        <h3 class='pricing-title'><?php echo $settings['title'] ?></h3>
                    </div>
                    <ul class='pricing-feature-list'>
                        <?php  foreach($settings['features'] as $features_lists) : ?>
                        <li class='pricing-feature'><?php echo $features_lists['features_list'] ?></li>
                        <?php  endforeach;  ?>
                    </ul>
                    <a class='pricing-action' href="<?php echo $settings['button_link'] ?>" class="button"><?php echo $settings['button_text'] ?></a>
                    </div>


                </div>
            </div>

        
            <style>
                .container-one {
                    margin: 0 auto;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                }
               
                .pricing {
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -webkit-justify-content: center;
                    justify-content: center;
                    width: 100%;
                    margin: 0 auto 3em;
                    }
                    .pricing-item {
                    position: relative;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-flex-direction: column;
                    flex-direction: column;
                    -webkit-align-items: stretch;
                    align-items: stretch;
                    text-align: center;
                    -webkit-flex: 0 1 330px;
                    flex: 0 1 330px;
                    }
                    .pricing-action {
                    color: inherit;
                    border: none;
                    background: none;
                    }
                    .pricing-action:focus {
                    outline: none;
                    }

                    .pricing-feature-list {
                    text-align: left;
                    }

                    .pricing-palden .pricing-item {
                    font-family: &quot;Open Sans&quot;, sans-serif;
                    cursor: default;
                    color: #84697c;
                    background: #fff;
                    box-shadow: 0 0 10px rgba(46, 59, 125, 0.23);
                    border-radius: 20px 20px 10px 10px;
                    margin: 1em;
                    }

                    @media screen and (min-width: 66.25em) {
                    .pricing-palden .pricing-item {
                        margin: 1em -0.5em;
                    }

                    .pricing-palden .pricing__item--featured {
                        margin: 0;
                        z-index: 10;
                        box-shadow: 0 0 20px rgba(46, 59, 125, 0.23);
                    }
                    }
                    .pricing-palden .pricing-deco {
                    border-radius: 10px 10px 0 0;
                    background: rgba(76, 70, 101, 0.99);
                    padding: 4em 0 9em;
                    height: 200px;
                    position: relative;
                    }
                    .pricing-palden .pricing-deco-img {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 50px;
                    }
                    .pricing-palden .pricing-title {
                    font-size: 0.75em;
                    margin: 0;
                    text-transform: uppercase;
                    letter-spacing: 5px;
                    color: #fff;
                    }
                    .pricing-palden .deco-layer {
                    -webkit-transition: -webkit-transform 0.5s;
                    transition: transform 0.5s;
                    }
                    .pricing-palden .pricing-item:hover .deco-layer--1 {
                    -webkit-transform: translate3d(15px, 0, 0);
                    transform: translate3d(15px, 0, 0);
                    }
                    .pricing-palden .pricing-item:hover .deco-layer--2 {
                    -webkit-transform: translate3d(-15px, 0, 0);
                    transform: translate3d(-15px, 0, 0);
                    }
                    .pricing-palden .icon {
                    font-size: 2.5em;
                    }
                    .pricing-palden .pricing-price {
                    font-size: 5em;
                    font-weight: bold;
                    padding: 0;
                    color: #fff;
                    margin: 0 0 0.25em 0;
                    line-height: 0.75;
                    }
                    .pricing-palden .pricing-currency {
                    font-size: 0.15em;
                    vertical-align: top;
                    }
                    .pricing-palden .pricing-period {
                    font-size: 0.15em;
                    padding: 0 0 0 0.5em;
                    font-style: italic;
                    }
                    .pricing-palden .pricing__sentence {
                    font-weight: bold;
                    margin: 0 0 1em 0;
                    padding: 0 0 0.5em;
                    }
                    .pricing-palden .pricing-feature-list {
                    margin: 0;
                    padding: 0.25em 0 2.5em;
                    list-style: none;
                    text-align: center;
                    }
                    .pricing-palden .pricing-feature {
                    padding: 1em 0;
                    }
                    .pricing-palden .pricing-action {
                    font-weight: bold;
                    margin: auto 3em 2em 3em;
                    padding: 1em 2em;
                    color: #fff;
                    border-radius: 30px;
                    background: #4d4766;
                    -webkit-transition: background-color 0.3s;
                    transition: background-color 0.3s;
                    }
                    .pricing-palden .pricing-action:hover, .pricing-palden .pricing-action:focus {
                    background-color: #100A13;
                    }

                    .pricing-palden .pricing-item--featured .pricing-deco {
                    padding: 5em 0 8.885em 0;
                    }


            </style>

            <?php
        } elseif ( 'template-2' === $template_select ) {
            ?>

                <div class="container-two">
                    <div class="generic_content clearfix highlighted-<?php echo $settings['highlighted'] ?>">
                        <div class="generic_head_price clearfix">
                            <div class="generic_head_content clearfix">
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span><?php echo $settings['title'] ?></span>
                                </div>
                            </div>
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign"><?php echo $settings['currency_symbols'] ?></span> 
                                    <span class="currency"><?php echo $settings['price'] ?></span>
                                    <span class="month"><?php echo "Per ". $settings['price_type'] ?></span>
                                </span>
                            </div>
                            <p><?php echo $settings['subtitle'] ?></p>
                        </div>                     
                        <div class="generic_feature_list">
                            <ul>
                                <?php  foreach($settings['features'] as $features_lists) : ?>
                                <li><?php echo $features_lists['features_list'] ?></li>
                                <?php  endforeach;  ?>
                            </ul>
                        </div>
                        <div class="generic_price_btn clearfix">
                            <a href="<?php echo $settings['button_link'] ?>" ><?php echo $settings['button_text'] ?></a>
                        </div>
                    </div>
                </div>

                <style>
                    
                    .container-two {
                        margin: 0 auto;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        font-family: 'Raleway', sans-serif;
                    }


                    .container-two p {
                        font-family: "Lato",sans-serif;
                        font-size: 18px;
                        opacity: 0.8;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    .generic_content{
                        background-color: #fff;
                        overflow: hidden;
                        position: relative;
                        text-align: center;
                        padding: 20px;
                        width: 350px;
                    }

                    .generic_content .generic_head_price{
                        background-color: #f6f6f6;
                    }

                    .generic_content .generic_head_price .generic_head_content .head_bg{
                        border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
                    }

                    .generic_content .generic_head_price .generic_head_content .head span{
                        color: #525252;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .sign{
                        color: #414141;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .currency{
                        color: #414141;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .cent{
                        color: #414141;
                    }

                    .generic_content .generic_head_price .generic_price_tag .month{
                        color: #414141;
                    }

                    .generic_content .generic_feature_list ul li{	
                        color: #a7a7a7;
                    }

                    .generic_content .generic_feature_list ul li span{
                        color: #414141;
                    }
                    .generic_content .generic_feature_list ul li:hover{
                        background-color: #E4E4E4;
                        border-left: 5px solid #2ECC71;
                    }

                    .generic_content .generic_price_btn a{
                        border: 1px solid #2ECC71; 
                        color: #2ECC71;
                    } 

                    .generic_content.highlighted-yes .generic_head_price .generic_head_content .head_bg,
                    .generic_content:hover .generic_head_price .generic_head_content .head_bg{
                        border-color: #2ECC71 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #2ECC71;
                        color: #fff;
                    }

                    .generic_content:hover .generic_head_price .generic_head_content .head span,
                    .generic_content.highlighted-yes .generic_head_price .generic_head_content .head span{
                        color: #fff;
                    }

                    .generic_content:hover .generic_price_btn a,
                    .generic_content.highlighted-yes .generic_price_btn a{
                        background-color: #2ECC71;
                        color: #fff;
                    } 
                    
                    .row .table{
                        padding: 28px 0;
                    }

                    /*PRICE BODY CODE START*/

                    .generic_content{
                        overflow: hidden;
                        position: relative;
                        text-align: center;
                    }

                    .generic_content .generic_head_price {
                        margin: 0 0 20px 0;
                    }

                    .generic_content .generic_head_price .generic_head_content{
                        margin: 0 0 50px 0;
                    }

                    .generic_content .generic_head_price .generic_head_content .head_bg{
                        border-style: solid;
                        border-width: 90px 1411px 23px 399px;
                        position: absolute;
                    }

                    .generic_content .generic_head_price .generic_head_content .head{
                        padding-top: 40px;
                        position: relative;
                        z-index: 1;
                    }

                    .generic_content .generic_head_price .generic_head_content .head span{
                        font-family: "Raleway",sans-serif;
                        font-size: 28px;
                        font-weight: 400;
                        letter-spacing: 2px;
                        margin: 0;
                        padding: 0;
                        text-transform: uppercase;
                    }

                    .generic_content .generic_head_price .generic_price_tag{
                        padding: 0 0 20px;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price{
                        display: block;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .sign{
                        display: inline-block;
                        font-family: "Lato",sans-serif;
                        font-size: 28px;
                        font-weight: 400;
                        vertical-align: middle;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .currency{
                        font-family: "Lato",sans-serif;
                        font-size: 60px;
                        font-weight: 300;
                        letter-spacing: -2px;
                        line-height: 60px;
                        padding: 0;
                        vertical-align: middle;
                    }

                    .generic_content .generic_head_price .generic_price_tag .price .cent{
                        display: inline-block;
                        font-family: "Lato",sans-serif;
                        font-size: 24px;
                        font-weight: 400;
                        vertical-align: bottom;
                    }

                    .generic_content .generic_head_price .generic_price_tag .month{
                        font-family: "Lato",sans-serif;
                        font-size: 18px;
                        font-weight: 400;
                        letter-spacing: 3px;
                        vertical-align: bottom;
                    }

                    .generic_content .generic_feature_list ul{
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }

                    .generic_content .generic_feature_list ul li{
                        font-family: "Lato",sans-serif;
                        font-size: 18px;
                        padding: 15px 0;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    .generic_content .generic_feature_list ul li:hover{
                        transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        -webkit-transition: all 0.3s ease-in-out 0s;

                    }
                    .generic_content .generic_feature_list ul li .fa{
                        padding: 0 10px;
                    }
                    .generic_content .generic_price_btn{
                        margin: 20px 0 32px;
                    }

                    .generic_content .generic_price_btn a{
                        border-radius: 50px;
                        -moz-border-radius: 50px;
                        -ms-border-radius: 50px;
                        -o-border-radius: 50px;
                        -webkit-border-radius: 50px;
                        display: inline-block;
                        font-family: "Lato",sans-serif;
                        font-size: 18px;
                        outline: medium none;
                        padding: 12px 30px;
                        text-decoration: none;
                        text-transform: uppercase;
                    }

                    .generic_content,
                    .generic_content:hover,
                    .generic_content .generic_head_price .generic_head_content .head_bg,
                    .generic_content:hover .generic_head_price .generic_head_content .head_bg,
                    .generic_content .generic_head_price .generic_head_content .head h2,
                    .generic_content:hover .generic_head_price .generic_head_content .head h2,
                    .generic_content .price,
                    .generic_content:hover .price,
                    .generic_content .generic_price_btn a,
                    .generic_content:hover .generic_price_btn a{
                        transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        -webkit-transition: all 0.3s ease-in-out 0s;
                    } 
                    @media (max-width: 320px) {	
                    }

                    @media (max-width: 767px) {
                        .generic_content{
                            margin-bottom:75px;
                        }
                    }
                    @media (min-width: 768px) and (max-width: 991px) {
                        .col-md-3{
                            float:left;
                            width:50%;
                        }
                        
                        .col-md-4{
                            float:left;
                            width:50%;
                        }
                        
                        .generic_content{
                            margin-bottom:75px;
                        }
                    }
                    @media (min-width: 992px) and (max-width: 1199px) {
                    }
                    @media (min-width: 1200px) {
                    }
                    #generic_price_table_home{
                        font-family: 'Raleway', sans-serif;
                    }

                     .text-center h1,
                    .text-center h1 a{
                        color: #7885CB;
                        font-size: 30px;
                        font-weight: 300;
                        text-decoration: none;
                    }
                    .demo-pic{
                        margin: 0 auto;
                    }
                    .demo-pic:hover{
                        opacity: 0.7;
                    }

                    #generic_price_table_home ul{
                        margin: 0 auto;
                        padding: 0;
                        list-style: none;
                        display: table;
                    }
                    #generic_price_table_home li{
                        float: left;
                    }
                    #generic_price_table_home li + li{
                        margin-left: 10px;
                        padding-bottom: 10px;
                    }
                    #generic_price_table_home li a{
                        display: block;
                        width: 50px;
                        height: 50px;
                        font-size: 0px;
                    }
                    #generic_price_table_home .blue{
                        background: #3498DB;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .emerald{
                        background: #2ECC71;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .grey{
                        background: #7F8C8D;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .midnight{
                        background: #34495E;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .orange{
                        background: #E67E22;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .purple{
                        background: #9B59B6;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .red{
                        background: #E74C3C;
                        transition:all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .turquoise{
                        background: #1ABC9C;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    #generic_price_table_home .blue:hover,
                    #generic_price_table_home .emerald:hover,
                    #generic_price_table_home .grey:hover,
                    #generic_price_table_home .midnight:hover,
                    #generic_price_table_home .orange:hover,
                    #generic_price_table_home .purple:hover,
                    #generic_price_table_home .red:hover,
                    #generic_price_table_home .turquoise:hover{
                        border-bottom-left-radius: 50px;
                        border-bottom-right-radius: 50px;
                        border-top-left-radius: 50px;
                        border-top-right-radius: 50px;
                        transition: all 0.3s ease-in-out 0s;
                    }
                    #generic_price_table_home .divider{
                        border-bottom: 1px solid #ddd;
                        margin-bottom: 20px;
                        padding: 20px;
                    }
                    #generic_price_table_home .divider span{
                        width: 100%;
                        display: table;
                        height: 2px;
                        background: #ddd;
                        margin: 50px auto;
                        line-height: 2px;
                    }
                    #generic_price_table_home .itemname{
                        text-align: center;
                        font-size: 50px ;
                        padding: 50px 0 20px ;
                        border-bottom: 1px solid #ddd;
                        margin-bottom: 40px;
                        text-decoration: none;
                        font-weight: 300;
                    }
                    #generic_price_table_home .itemnametext{
                        text-align: center;
                        font-size: 20px;
                        padding-top: 5px;
                        text-transform: uppercase;
                        display: inline-block;
                    }
                    #generic_price_table_home .footer{
                        padding:40px 0;
                    }

                    .price-heading{
                        text-align: center;
                    }
                    .price-heading h1{
                        color: #666;
                        margin: 0;
                        padding: 0 0 50px 0;
                    }
                    .demo-button {
                        background-color: #333333;
                        color: #ffffff;
                        display: table;
                        font-size: 20px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 20px;
                        margin-bottom: 50px;
                        outline-color: -moz-use-text-color;
                        outline-style: none;
                        outline-width: medium ;
                        padding: 10px;
                        text-align: center;
                        text-transform: uppercase;
                    }
                    .bottom_btn{
                        background-color: #333333;
                        color: #ffffff;
                        display: table;
                        font-size: 28px;
                        margin: 60px auto 20px;
                        padding: 10px 25px;
                        text-align: center;
                        text-transform: uppercase;
                    }
                    .demo-button:hover{
                        background-color: #666;
                        color: #FFF;
                        text-decoration:none;
                        
                    }
                    .bottom_btn:hover{
                        background-color: #666;
                        color: #FFF;
                        text-decoration:none;
                    }

                </style>



            <?php
        } elseif ( 'template-3' === $template_select ) {
            ?>

            <div class="container-three">
                <div class="block professional fl">
                    <h2 class="title"><?php echo $settings['title'] ?></h2>
                    <!-- CONTENT -->
                    <div class="content">
                        <p class="price">
                            <sup><?php echo $settings['currency_symbols'] ?></sup>
                            <span><?php echo $settings['price'] ?></span>
                            <sub><?php echo "Per ". $settings['price_type'] ?></sub>
                        </p>
                        <p class="hint"><?php echo $settings['subtitle'] ?></p>
                    </div>
                    <!-- /CONTENT -->
                    <!-- FEATURES -->
                    <ul class="features">
                        <?php  foreach($settings['features'] as $features_lists) : ?>
                            <li><?php echo $features_lists['features_list'] ?></li>
                            <?php  endforeach;  ?>
                    </ul>
                    <!-- /FEATURES -->
                    <!-- PT-FOOTER -->
                    <div class="pt-footer">
                    <a href="<?php echo $settings['button_link'] ?>" class="button"><?php echo $settings['button_text'] ?></a>
                    </div>
                    <!-- /PT-FOOTER -->
                </div>
            </div>


        
            <style>
                .container-three {
                    margin: 0 auto;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    text-align: center;
                    padding: 10px;
                    padding-right: 0;
                }


                /*------ utiltity classes -----*/
                .fl{ float:left; }
                .fr{ float: right; }
                /*its also known as clearfix*/
                .group:before,
                .group:after {
                    content: "";
                    display: table;
                } 
                .group:after {
                    clear: both;
                }
                .group {
                    zoom: 1;  /*For IE 6/7 (trigger hasLayout) */
                }

                
                .block{
                    width: 100%;    
                    margin: 0 15px;
                    overflow: hidden;
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 5px;
                    border-radius: 5px;    
                /*    border: 1px solid red;*/
                }
                /*Shared properties*/
                .title,.pt-footer{
                    color: #FEFEFE;
                    text-transform: capitalize;
                    line-height: 2.5;
                    position: relative;
                }
                .content{
                    position: relative;
                    color: #FEFEFE;
                    padding: 20px 0 10px 0;
                }
                /*arrow creation*/
                .content:after, .content:before,.pt-footer:before,.pt-footer:after {
                    top: 100%;
                    left: 50%;
                    border: solid transparent;
                    content: " ";
                    height: 0;
                    width: 0;
                    position: absolute;
                    pointer-events: none;
                }
                .pt-footer:after,.pt-footer:before{
                    top:0;
                }
                .content:after,.pt-footer:after {
                    border-color: rgba(136, 183, 213, 0);	
                    border-width: 5px;
                    margin-left: -5px;
                }
                /*/arrow creation*/
                .price{
                    position: relative;
                    display: inline-block;
                    margin-bottom: 0.625rem;
                }
                .price span{    
                    font-size: 6rem;
                    letter-spacing: -10px;
                    font-weight: bold;        
                }
                .price sup{
                    font-size: 1.5rem;    
                    position: absolute;    
                    top: 65px;
                    left: -12px;
                }
                .hint{
                    font-style: italic;
                    font-size: 0.9rem;
                }
                .features{
                    list-style-type: none;    
                    background: #FFFFFF;
                    text-align: left;
                    color: #9C9C9C;
                    padding:30px 22%;
                    font-size: 0.9rem;
                }
                .features li{
                    padding:15px 0;
                    width: 100%;
                }
                .features li span{
                padding-right: 0.4rem; 
                }
                .pt-footer{
                    font-size: 0.95rem;
                    text-transform: capitalize;
                }
               
                /*PROFESSIONAL*/
                .professional .title{
                    background: #3EC6E0;
                }
                .professional .content,.professional .pt-footer{
                    background: #53CFE9;
                }
                .professional .content:after{	
                    border-top-color: #53CFE9;	
                }
                .professional .pt-footer:after{
                    border-top-color: #FFFFFF;
                }
               

            <style>



            <?php
        }
	}



}