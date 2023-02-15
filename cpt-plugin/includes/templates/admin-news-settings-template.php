<div class="wrap">
    <h1>News Settings</h1>
    <form method="post" action="<?php echo admin_url( 'edit.php?post_type=news&page=news-settings' ) ?>">
        <?php wp_nonce_field( 'news_settings_save', 'news_settings_nonce' ) ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th>
                        <label for="news-related-title">
                            <?php echo esc_html__( 'Related News Title', 'cpt-plugin' ) ?>
                        </label>
                    </th>
                    <td><input name="news_related_title" type="text" id="news-related-title" class="regular-text" value="<?php echo esc_attr( get_option( 'cpt_news_related_title', 'Related News' ) ) ?>" required></td>
                </tr>
                <tr>
                    <th>
                        <label for="show-related-news-box">
                            <?php echo esc_html__( 'Show Related News Box?', 'cpt-plugin' ) ?>
                        </label>
                    </th>
                    <td><input name="show_related_news_box" type="checkbox" id="show-related-news-box" class="regular-text" value="1" <?php echo checked( get_option( 'cpt_show_related_news_box', 1 ) ) ?>></td>
                </tr>
                <tr>
                    <th>
                        <label for="max-num-related-posts">
                        <?php echo esc_html__( 'Number of Related News To Show', 'cpt-plugin' ) ?>
                        </label>
                    </th>
                    <td>
                        <select name="max_num_related_posts" id="max-num-related-posts">
                        <?php for( $i = 1; $i<=10; $i++): ?>
                            <option value="<?php echo $i ?>" <?php selected( get_option( 'cpt_max_num_related_posts', 3) , $i) ?>><?php echo $i; ?></option>
                        <?php endfor; ?>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="
            <?php echo esc_attr__( 'Save Changes', 'cpt-plugin' ) ?>
            ">
        </p>
    </form>
</div>
