<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <?php
        $fields =  array(
            'author' =>
            '<p class="form-group comment-form-author"><label for="author">' . __('Name', 'domainreference') . ($req ? '<span class="required">*</span>' : '') . '</label>' .
                '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
                '" size="30"' . $aria_req . ' /></p>',

            'email' =>
            '<p class="form-group comment-form-email"><label for="email">' . __('Email', 'domainreference') . ($req ? '<span class="required">*</span>' : '') . '</label>' .
                '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                '" size="30"' . $aria_req . ' /></p>',

            'url' =>
            '<p class="form-group comment-form-url"><label for="url">' . __('Website', 'domainreference') . '</label>' .
                '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) .
                '" size="30" /></p>',
        );

        $form_args = array(
            'comment_field' => '<p class="form-group comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" class="form-control" name="comment" rows="8" aria-required="true"></textarea></p>',
            'fields' => apply_filters('comment_form_default_fields', $fields),
            'class_submit' => 'btn btn-primary',
            'label_submit'=>'Submit Comments',
        );

        comment_form($form_args); ?>
    </div>
</div>

<ul class="list-unstyled">
    <?php
    require_once('bootstrap-comment-walker.php');

    wp_list_comments(array(
        'style'         => 'ul',
        'short_ping'    => true,
        'avatar_size'   => '64',
        'walker'        => new Bootstrap_Comment_Walker(),
    ));
    ?>
</ul>