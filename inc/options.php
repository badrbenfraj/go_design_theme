<?php
    function GoDesign_Options(){
        add_menu_page('Go Design', 'Go Design Options', 'administrator', 'GoDesign_Options','GoDesign_adjustments','',20);
        add_submenu_page('GoDesign_Options', 'About', 'About Options','administrator', 'GoDesign_about','GoDesign_about');
        add_submenu_page('GoDesign_Options', 'Services', 'Services Options','administrator', 'GoDesign_Services','GoDesign_Services');
        add_submenu_page('GoDesign_Options', 'portfolio', 'Portfolio Options','administrator', 'GoDesign_portfolio','GoDesign_portfolio');
        add_submenu_page('GoDesign_Options', 'contact', 'Contact Options','administrator', 'GoDesign_contact','GoDesign_contact');
        add_submenu_page('GoDesign_Options', 'footer', 'Footer Options','administrator', 'GoDesign_footer','GoDesign_footer');

    }
    add_action('admin_menu' ,'GoDesign_Options');

    function GoDesign_settings(){
        register_setting('GoDesign_options_header', 'GoDesign_options_header_title');
        register_setting('GoDesign_options_header', 'GoDesign_options_header_subtitle');
        register_setting('GoDesign_options_header', 'GoDesign_options_header_logo');
    }
    add_action('init', 'GoDesign_settings');
    ?>
    <?php function GoDesign_adjustments(){?>
        <div class="wrap">
            <h1>Go Design Header Options:</h1>
            <form action="option.php" method="POST">
                <?php 
                    settings_fields('GoDesign_options_header');
                    do_settings_sections('GoDesign_options_header');
                ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Title: </th>
                        <td>
                            <input type="text" name="GoDesign_options_header_title" value="<?php echo esc_attr( get_option('GoDesign_options_header_title')); ?>">
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">Sub-Title: </th>
                        <td>
                            <input type="text" name="GoDesign_options_header_subtitle" value="<?php echo esc_attr( get_option('GoDesign_options_header_subtitle')); ?>">
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">Logo URL: </th>
                        <td>
                            <input type="text" name="GoDesign_options_header_logo" value="<?php echo esc_attr( get_option('GoDesign_options_header_logo')); ?>">
                        </td>
                    </tr>
                </table>
                <?php 
                    submit_button();
                ?>
            </form>
        </div>
    <?php } ?>
    <?php function GoDesign_about(){ ?>

    <?php } ?>

    <?php function GoDesign_Services(){?>

    <?php }?>

    <?php function GoDesign_contact(){?>

    <?php }?>

    <?php function GoDesign_footer(){?>

    <?php }?>