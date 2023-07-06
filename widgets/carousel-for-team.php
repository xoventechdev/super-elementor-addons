<?php


class Team_Member_Carousel extends \Elementor\Widget_Base {

	public function get_name() {
		return 'team_member_carousel';
	}

	public function get_title() {
		return esc_html__( 'Team Member Carousel', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-accordion';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'team','member', 'carousel'];
	}
	
    protected function register_controls() {


		$this->start_controls_section(
			'content',
			[
				'label' => esc_html__( 'Content', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'name',
			[
				'label' => esc_html__( 'Name', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hosen', 'elementor-addon' ),
				'label_block' => true,
                'placeholder' => 'Type name here',
                'default' => 'James Rodriguez',
			]
		);
		
		$repeater->add_control(
			'designation',
			[
				'label' => esc_html__( 'Designation', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'CEO', 'elementor-addon' ),
                'placeholder' => 'Type designation here',
                'default' => 'Front-End Developer',
			]
		);
		
		$repeater->add_control(
			'about',
			[
				'label' => esc_html__( 'About', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'About this man', 'elementor-addon' ),
                'placeholder' => 'Type about this person here',
                'default' => 'James is a talented front-end developer specializing in creating visually appealing and interactive user interfaces. He is skilled in HTML, CSS, JavaScript, and front-end frameworks like React and Vue.js.',
			]
		);
		
		
		$repeater->add_control(
            'image',
            [
                'label' => esc_html__( 'Photo', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://cdn.icon-icons.com/icons2/2643/PNG/512/male_man_boy_black_tone_avatar_people_person_icon_159369.png',
                ],
            ]
        );
        
	

		$this->add_control(
        	'carousel_item',
        	[
        		'label' => esc_html__( 'Carousel Item', 'elementor-addon' ),
        		'type' => \Elementor\Controls_Manager::REPEATER,
        		'fields' => $repeater->get_controls(),
				'title_fields' => '{{{	name }}}',
        	]
        );

        $this->end_controls_section();






        $this->start_controls_section(
			'control',
			[
				'label' => esc_html__( 'Control Style and Carousel', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
            'select_style',
            [
                'label' => __('Select Carousel Style', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'option1', // Set the default option value
                'options' => [
                    'option1' => __('Style 1', 'elementor-addon'),
                    'option2' => __('Style 2', 'elementor-addon'),
                    'option3' => __('Style 3', 'elementor-addon'),
                ],
            ]
        );

        $this->add_control( 
        	'carousel_control',
        	[
        		'label' => esc_html__( 'Enable Carousel?', 'elementor-addon' ),
        		'type' => \Elementor\Controls_Manager::SWITCHER,
        		'default' => 'no',
			]
        );

        $this->add_control( 
        	'carousel_play',
        	[
        		'label' => esc_html__( 'Enable AutoPlay?', 'elementor-addon' ),
        		'type' => \Elementor\Controls_Manager::SWITCHER,
        		'default' => 'no',
			]
        );

       



        $this->end_controls_section();




        $this->start_controls_section(
            'name-list-styles',
            [
            'label'  => __( 'Member Name Style', 'elementor-addon' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'name-typography-group',
				'selector' => '{{WRAPPER}} .member-name h2',
				'label' => esc_html__( 'Member Name Typhography', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'member-name-color',
			[
				'label' => esc_html__( 'Name Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .member-name h2' => 'color: {{VALUE}}',
				],
			]
		);

        $this->end_controls_section();



        $this->start_controls_section(
            'designation-list-styles',
            [
            'label'  => __( 'Member Designation Style', 'elementor-addon' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'designation-typography-group',
				'selector' => '{{WRAPPER}} .member-name h4',
				'label' => esc_html__( 'Member Designation Typhography', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'member-designation-color',
			[
				'label' => esc_html__( 'Designation Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .member-name h4' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();


        $this->start_controls_section(
            'about-list_styles',
            [
            'label'  => __( 'Member About Style', 'elementor-addon' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'about-typography-group',
				'selector' => '{{WRAPPER}} .c-about',
				'label' => esc_html__( 'Member About Typhography', 'elementor-addon' ),
			]
		);
		$this->add_control(
			'member-about-color',
			[
				'label' => esc_html__( 'About Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .c-about' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
        
    
	}
		

    protected function render() {
	    $settings = $this->get_settings_for_display();
        $autoPlay = false;
	
		?>

			<?php
				if($settings['carousel_control'] == 'yes') :
                    if($settings['carousel_play'] == 'yes'){
                        $autoPlay = true;
                    }
				?>
					
					<script>
						jQuery(document).ready(function($) {
							$('.main-body').slick({
						dots: true,
						arrows: false,
						slidesToShow:3,
                        autoplay: '<?php echo $autoPlay; ?>', 
						
					});
				});
					</script>

				<?php 
				endif;
			?>
	

            <?php
				if($settings['select_style'] == 'option1') :
				?>


                    <div class="main-body">
                        <?php  
                        foreach($settings['carousel_item'] as $carousel_items) : ?>
                        <div class="item-box">
                            <div class="colmun">
                                <div class="teamcol">
                                    <div class="teamcolinner">
                                        <div class="avatar"><img src="<?php echo $carousel_items['image']['url'];  ?>" alt="Member">
                                        </div>
                                        <div class="member-name">
                                            <h2 align="center"><?php echo $carousel_items['name']; ?></h2>
                                            <h4 align="center"><?php echo $carousel_items['designation']; ?></h4>
                                        </div>
                                        <div class="member-info">
                                            <p class="c-about" align="center"><?php echo $carousel_items['about']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        endforeach; 
                        ?>
                    </div>

                    <style>
                            .colmun {
                                width: 350px;
                                text-align: center;
                                padding: 10px;
                            }

                            .item-box {
                                width: 350px;
                                margin-bottom: 20px;
                                margin-right: 10px;
                                margin-left: 10px;
                                margin-top: 100px;
                            }

                            .main-body {
                                display: flex;
                                flex-wrap: wrap;
                                justify-content: center;
                            }

                        .avatar {
                            position: absolute;
                            left: 0;
                            right: 0;
                            top: -80px;
                            text-align: center;
                        }
                        .teamcolinner {
                            position: relative;
                        }
                        .avatar > img {
                            width: 150px;
                            margin: auto;
                            border-radius: 50%;
                            border: 1px solid rgb(170 170 173/ 1);
                            box-shadow: 0px 3px 10px 3px rgb(170 170 173 / 0.5);
                        }
                        .teamcolinner {
                            position: relative;
                            border: 1px dashed #ddd;
                            min-height: 100px;
                            background: #fff;
                            z-index: 9;
                        }
                        .teamcol {
                            padding: 15px;
                            background: #fff;
                            border-radius: 10px;
                            position: relative;
                            transition: transform 1s ease-in-out;
                        }
                        .teamcol:hover {
                            transform: translateY(-30px);
                            box-shadow: 0px 3px 10px 3px rgb(170 170 173 / 0.5);
                            transition: transform 1s ease-in-out;
                        }
                        .teamcol:before {
                            content: "";
                            width: 50%;
                            height: 50%;
                            position: absolute;
                            right: 0;
                            top: 0;
                            background: -webkit-linear-gradient(#ffbf00, #ffa000);
                            border-top-right-radius: 10px;
                            transition: width 1s ease-in-out;
                        }
                        .teamcol:after {
                            content: "";
                            width: 50%;
                            height: 50%;
                            position: absolute;
                            left: 0;
                            bottom: 0;
                            background: -webkit-linear-gradient(#0052cc, #005fec);
                            border-bottom-left-radius: 10px;
                            transition: width 1s ease-in-out;
                        }
                        .teamcol:hover::before, .teamcol:hover::after {
                            width: 100%;
                            transition: width 1s ease-in-out;
                        }
                        .member-name h2 {
                            margin-top: 80px;
                            font-size: 28px;
                            font-family: math;
                            font-weight: 600;
                        }
                        .member-name h4 {
                            font-size: 20px;
                            font-style: italic;
                            font-family: auto;
                        }

                        .member-info {
                            padding: 10px 20px;
                        }
                        .social-listing {
                            align-items: center;
                            justify-content: center;
                            display: flex;
                            list-style: none;
                            padding: 0;
                        }
                        .social-listing >li {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            width: 30px;
                            height: 30px;
                            background: #f4f5f7;
                            border-radius: 50%;
                            margin: 5px;
                        }

                        .slick-dots {
                            display: flex;
                            background-color: rgba(102, 96, 96, 0.507);
                            padding: 0;
                            margin: 0;
                            margin-top: 15px;
                        }

                        .slick-dots button {
                            visibility: hidden;
                        }

                        .slick-dots li {
                            list-style: none;
                            height: 6px;
                            width: 70px;
                        }

                        li.slick-active {
                            background:  #ffa000;	
                        }

                        .main-body .slick-list {
                            overflow: inherit;
                            max-width: 100%;
                        } 

                        .main-body .team-item.slick-slide {
                            width: 350px !important;
                        }

                    </style>
                    

                <?php 
				endif;
			?>




            <?php
				if($settings['select_style'] == 'option2') :
				?>


                <div class="main-body">
                    <?php  
                    foreach($settings['carousel_item'] as $carousel_items) : ?>
                    <div class="item-box">
                        <div class="team-item team-item-carousel-<?php echo $settings['carousel_control'] ?>">
                            <div class="mb-30 position-relative d-flex align-items-center">
                                <span class="img-holder d-inline-block">
                                    <img src="<?php echo $carousel_items['image']['url'];  ?>" alt="Team">
                                </span>
                            </div>
                            <div class="team-content">
                                <div class="member-name">
                                    <h2 class="mb-2 names"><?php echo $carousel_items['name']; ?></h2>
                                    <h4 class="designations mb-0 style3-d"><?php echo $carousel_items['designation']; ?></h4>
                                    <p class="about-text c-about"><?php echo $carousel_items['about']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php 
                    endforeach; 
                    ?>
                </div>



                    <style>


                        .team-item {
                            width: 350px;
                            border: 1px solid darkgray;
                            text-align: center;
                            border-radius: 10px;
                            padding: 10px;
                        }

                        .img-holder {
                            width: 100%;
                            }

                        .item-box {
                            width: 350px;
                            margin-bottom: 20px;
                            margin-right: 10px;
                            margin-left: 10px;
                        }

                        .main-body {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center;
                        }

                        .names {
                        font-size: 28px;
                        font-family: math;
                        font-weight: 600;
                        }

                        .designations {
                            font-size: 20px;
                            font-style: italic;
                            color: darkgray;
                            font-family: auto;
                        }
                        
                        .img-holder img {
                            margin: 0 auto;
                            width: 200px;
                            height: 200px;
                        }

                        .slick-dots {
                            display: flex;
                            background-color: rgba(102, 96, 96, 0.507);
                            padding: 0;
                            margin: 0;
                            margin-top: 15px;
                        }
        
                        .slick-dots button {
                            visibility: hidden;
                        }

                        .slick-dots li {
                            list-style: none;
                            height: 6px;
                            width: 70px;
                        }

                        li.slick-active {
                            background:  #516cd9;	
                        }



                        .main-body .slick-list {
                            overflow: inherit;
                            max-width: 100%;
                        } 

                        .main-body .team-item.slick-slide {
                            width: 350px !important;
                            /* text-align: center; */
                            /* display: flex;
                            margin-right:30px;
                            margin-bottom: 30px; */
                        }

                        .team-item..slick-slide:last-child {
                            /* margin-right:0px; */
                        }


                    </style>
            
                <?php 
				endif;
			?>



            <?php
				if($settings['select_style'] == 'option3') :
				?>
                    <div class="main-body">
                        <?php  
                        foreach($settings['carousel_item'] as $carousel_items) : ?>
                            <div class="item-box">

                                <div class="team-item our-team">
                                    <div class="pic">
                                        <img src="<?php echo $carousel_items['image']['url'];  ?>">
                                    </div>
                                    <div class="team-content">
                                        <div class="member-name">
                                            <h2 class="title"><?php echo $carousel_items['name']; ?></h2>
                                            <h4 id="s-designation"  class="post"><?php echo $carousel_items['designation']; ?></h4>
                                            <p class="small text-muted mb-0 c-about"><?php echo $carousel_items['about']; ?></p>
                                        </div>
                                    </div>
                                    <ul class="social">
                                    </ul>
                                </div>
                            </div>
                        <?php 
                        endforeach; 
                        ?>

                    </div>

                    <style>


                        .our-team {
                            padding: 30px 0 40px;
                            background: #f9f9f9;
                            text-align: center;
                            overflow: hidden;
                            position: relative;
                            border-bottom: 5px solid #00325a;
                        }
                        .our-team:hover{
                            border-bottom: 5px solid #2f2f2f;
                        }

                        .our-team .pic{
                            display: inline-block;
                            width: 130px;
                            height: 130px;
                            margin-bottom: 50px;
                            z-index: 1;
                            position: relative;
                        }
                        .our-team .pic:before {
                            content: "";
                            width: 100%;
                            height: 100%;
                            border-radius: 50%;
                            background: #00325a;
                            position: absolute;
                            bottom: 135%;
                            right: 0;
                            left: 0;
                            opacity: 1;
                            transform: scale(3);
                            transition: all 0.3s linear 0s;
                        }
                        .our-team:hover .pic:before{
                        height: 100%;
                            background: #2f2f2f; 
                        }
                        .our-team .pic:after {
                            content: "";
                            width: 100%;
                            height: 100%;
                            border-radius: 50%;
                            background: #ffffff00;
                            position: absolute;
                            top: 0;
                            left: 0;
                            z-index: 1;
                            transition: all 0.3s linear 0s;
                        }
                        .our-team:hover .pic:after{
                            background: #7ab92d;
                        }
                        .our-team .pic img {
                            width: 100%;
                            height: auto;
                            border-radius: 50%;
                            transform: scale(1);
                            transition: all 0.9s ease 0s;
                            box-shadow: 0 0 0 14px #f7f5ec;
                            transform: scale(0.7);
                            position: relative;
                            z-index: 2;
                        }
                        .our-team:hover .pic img{
                            box-shadow: 0 0 0 14px #f7f5ec;
                            transform: scale(0.7);
                        }
                        .our-team .team-content{ margin-bottom: 30px; }
                        .our-team .title{
                            font-size: 22px;
                            font-weight: 700;
                            letter-spacing: 1px;
                            text-transform: capitalize;
                            margin-bottom: 5px;
                        }
                        .our-team .post{
                            display: block;
                            font-size: 18px;
                            color: #4e5052;
                            margin-bottom: 5px;
                            text-transform:capitalize;
                        }
                        .our-team .social{
                            width: 100%;
                            padding: 0;
                            margin: 0;
                            background: #2f2f2f;
                            position: absolute;
                            bottom: -100px;
                            left: 0;
                            transition: all 0.5s ease 0s;
                        }
                        .our-team:hover .social{ bottom: 0; }

                        @media only screen and (max-width: 990px){
                            .our-team{ margin-bottom: 30px; }
                        }





                        .team-item {
                            width: 350px;
                            border: 1px solid darkgray;
                            text-align: center;
                            border-radius: 10px;
                            padding: 10px;
                        }

                        .item-box {
                            width: 350px;
                            margin-bottom: 20px;
                            margin-right: 10px;
                            margin-left: 10px;
                        }

                        .main-body {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center;
                        }


                        .slick-dots {
                            display: flex;
                            background-color: rgba(102, 96, 96, 0.507);
                            padding: 0;
                            margin: 0;
                            margin-top: 15px;
                        }
        
                        .slick-dots button {
                            visibility: hidden;
                        }

                        .slick-dots li {
                            list-style: none;
                            height: 6px;
                            width: 70px;
                        }

                        li.slick-active {
                            background:  #00325a;	
                        }



                        .main-body .slick-list {
                            overflow: inherit;
                            max-width: 100%;
                        } 

                        .main-body .team-item.slick-slide {
                            width: 350px !important;
                            /* text-align: center; */
                            /* display: flex;
                            margin-right:30px;
                            margin-bottom: 30px; */
                        }

                        .team-item..slick-slide:last-child {
                            /* margin-right:0px; */
                        }





                    </style>




                <?php 
				endif;
			?>




        <?php
	}



}