<?php

class FAQ_Accordion extends \Elementor\Widget_Base {

    public function get_name() {
        return 'faq-accordion';
    }

    public function get_title() {
        return esc_html__( 'FAQ Accordion', 'elementor-addon' );
    }

    public function get_icon() {
        return ' eicon-editor-list-ol';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'FAQ','Accordion'];
    }


    protected function register_controls() {


		$this->start_controls_section(
			'content',
			[
				'label' => esc_html__( 'FAQ Accordion', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'question',
			[
				'label' => esc_html__( 'Question', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'What is the return policy?', 'elementor-addon' ),
				'label_block' => true,
                'placeholder' => 'Type here question',
			]
		);
		
		$repeater->add_control(
			'answer',
			[
				'label' => esc_html__( 'Answer', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'CEO', 'elementor-addon' ),
                'placeholder' => 'Type here answer',
                'default' => 'Our return policy allows for returns within 30 days of purchase. Please review our detailed return policy for more information.',
			]
		);
		

		$this->add_control(
        	'accordion_item',
        	[
        		'label' => esc_html__( 'Accordion Item', 'elementor-addon' ),
        		'type' => \Elementor\Controls_Manager::REPEATER,
        		'fields' => $repeater->get_controls(),
				'title_fields' => '{{{	question }}}',
        	]
        );

        $this->end_controls_section();
    }




    protected function render() {
	    $settings = $this->get_settings_for_display();
        // print_r($settings);
	
		?>



               
                <div class="panel-group wrap" id="bs-collapse">
                        <?php foreach($settings['accordion_item'] as $item) :
                        if(!empty($item['question']) && !empty($item['answer'])) : ?>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#" href="#one">
                                    Collapse item #1
                                </a>
                                </h4>
                            </div>
                            <div id="one" class="panel-collapse collapse">
                                <div class="panel-body">
                                Where now are the horse and the rider? Where is the horn that was blowing? Where is the helm and the hauberk, and the bright hair flowing?
                                </div>
                            </div>

                        </div>


                        <?php endif;
                endforeach; ?>
                </div>      



            <script>

                $(document).ready(function() {
                $('.collapse.in').prev('.panel-heading').addClass('active');
                $('#accordion, #bs-collapse')
                    .on('show.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                    })
                    .on('hide.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                    });
                }); 
               
            </script>

            <style>

a:focus,
a:hover,
a:active {
  outline: 0;
  text-decoration: none;
}

.panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #009688;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  content: '\e146';
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  content: '\e316';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}

            </style>


        <?php
    }

}