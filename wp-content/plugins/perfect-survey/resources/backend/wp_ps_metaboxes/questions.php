<?php
add_meta_box('survey_editor', __('Create your survey', 'perfect-survey'), function(){
  $questions = prsv_get_post_type_model()->get_questions();
  ?>
  <div class="ps_modal_back"></div>
  <table id="survey-empty-questions-box" class="survey_settings survey_input <?php echo $questions ? 'hidden' : ''; ?>">
    <tbody>
      <tr>
        <td>
          <div class='survey-empty'>
            <p class="survey-empty-message"><?php _e('This page is empty.<br>Add a question now!', 'perfect-survey') ?></p>
            <span class='survey-no-icon'><i class='pswp_set_icon-point-down'></i></span>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="survey_sortable-item" id="post-questions-box">
    <?php
    if($questions)
    {
      foreach($questions as $question)
      {
        prsv_resource_include_backend('questions_types/'.$question['type'], array(
          'question'      => $question,
          'question_type' => $question['question_type']
        ));
      }
    }
    ?>
  </div>
  <table class="survey_settings survey_input">
    <tbody>
      <tr class="survey-add-footer">
        <td class="survey-add-footer-inner">
          <div class="survey-footer">
            <a id="survey_open_modal" class="button button-primary button-large" href="#"><i class="pswp_set_icon-plus"></i> <?php _e('Add a question now', 'perfect-survey') ?></a>
          </div>
          <div class="survey-select-type" style="display: none">
            <ul>
              <?php
              $questions_types = prsv_get_post_type_model()->get_all_questions_types();
              foreach($questions_types as $question_type => $question_type_info)
              {
                ?>
                <li class="survey-btn-add" data-ps-question-type="<?php echo $question_type;?>">
                  <a href="#">
                    <span>
                      <i class="<?php echo $question_type_info['icon_class'];?>"></i>
                    </span>
                    <span>
                      <?php echo $question_type_info['name']; ?>
                    </span>
                  </a>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <?php
}, PRSV_PLUGIN_CODE, 'normal', 'high');
?>
