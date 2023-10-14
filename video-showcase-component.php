<section id="watch-talent-recap">
  <div class="container">
    <div class="row" style="padding-bottom: 15px;">
      <div class="col-xs-4">
        <h2 class="headline-home-white">WATCH TR</h2>
      </div>

      <?php if (have_rows('youtube_channel')) : ?>
        <div class="col-xs-8 yt-channel">
          <?php while (have_rows('youtube_channel')) : the_row(); ?>
            <a class="button youtube_channel-icon" onclick="showContainer('<?php echo get_sub_field('channel_id'); ?>', '<?php echo get_sub_field('default_video'); ?>')">
              <img loading="lazy" src="<?php echo get_sub_field('logo'); ?>">
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <!-- yt-video-container -->
      <?php if (have_rows('youtube_channel')) : ?>
        <div class="yt-video-container row">
          <!-- video play container -->
          <div class="yt-video-pages col-md-8">
            <div id="youtube-container" class="yt-video-container">
              <iframe src="https://www.youtube.com/embed/<?php echo get_field('default_video'); ?>" frameborder="0" allow="accelerometer; autoplay;"></iframe>
            </div>
          </div>
          <!-- video play container -->
          <?php while (have_rows('youtube_channel')) : the_row(); ?>
            <!-- video headline -->
            <div id="<?php echo get_sub_field('channel_id'); ?>" class="col-md-4 yt-channel-container">
              <?php if (have_rows('yt-video-playlist')) : ?>
                <?php while (have_rows('yt-video-playlist')) : the_row(); ?>
                  <div class="yt-video-playlist">
                    <button class="toggleButton" onclick="showVideo('<?php echo get_sub_field('video_id'); ?>')">
                      <div class="container">
                        <div class="row">
                          <div class="col-1" style="padding: 0;">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/images/TR2023/widgets/yt-shorts-play-btn-2.png'; ?>">
                          </div>
                          <div class="col-11"><?php echo get_sub_field('headline'); ?></div>
                        </div>
                      </div>
                    </button>
                  </div>
                <?php endwhile; ?>
                <div class="watch-more-btn-container">
                  <a class="watch-more-btn pink-btn" href="https://www.youtube.com/channel/<?php echo get_sub_field('channel_id'); ?>">WATCH MORE</a>
                </div>
              <?php endif; ?>
            </div>
            <!-- video headline -->
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-8" class="headline"></div>
        <?php if (have_rows('youtube_channel')) : ?>
          <?php while (have_rows('youtube_channel')) : the_row(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<script>
  // Your JavaScript scripts here
</script>
