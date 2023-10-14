# Custom ACF YouTube Link Updater
This is a customized theme component created using a custom ACF plugin. It enables the administrator to easily update YouTube video links as needed. This is ideal for companies with infrequent video updates but a significant number of views, helping conserve YouTube API quotas.

## Responsive YouTube Shorts Features
**Carousel Container:** Within this section, there's a container for a carousel that holds the YouTube shorts videos. Displays multiple items in a rotating manner, allowing users to scroll through the content.

**Loop Through YouTube Shorts Playlist:** The code loops through a list of YouTube shorts playlist items stored in custom field 'youtube_shorts_playlist.'

**Display YouTube Short Videos:** For each playlist item, the code generates HTML to display the YouTube shorts videos. It checks if it's the first video (index 0) and displays it with the video player and its headline. For subsequent videos, it displays them with a play button and a thumbnail, along with the video's headline.

**Modals for Video Playback:** When a user clicks on a video, the code utilizes Bootstrap modals to open a pop-up video player that allows users to watch the selected YouTube short video. It generates modals for each video in the playlist.

**Lazy Loading:** This code includes a JavaScript section that appears to implement lazy loading. Lazy loading is a technique that defers the loading of certain elements (e.g., images or videos) until they come into the user's viewport. In this case, it seems to remove a class from an element when it becomes visible, possibly indicating that the video player is loaded only when the user scrolls to it.

**Carousel Slick Slider:** This code also includes JavaScript that sets up a carousel or slider using the Slick Carousel library. It configures the number of slides to show and scroll through at different breakpoints (responsive design), allowing users to navigate through the YouTube shorts videos.

## Video Showcase Component Features

**Video Thumbnails:** The component displays video thumbnails for multiple YouTube channels. Users can click on these thumbnails to access specific channels and their content.

**Tagging System:** Each video is associated with relevant tags to provide context and categorization. Tags help users quickly identify the content they are interested in.

**Video Player:** A built-in video player allows users to watch videos without leaving the page. It loads and plays the default video associated with the selected channel.

**Technical Details:** The component is implemented using HTML, PHP, and JavaScript for dynamic content loading and video playback.
It includes JavaScript functions for switching between videos and controlling the video player.
The YouTube API may be integrated to fetch video data and details.

