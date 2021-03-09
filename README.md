# vidsomething
Shows your youtube-dl downloaded folder in a php catalog with thumbnails

(Please don't expect anything serious from a random 115 line php script.)

Use this to recreate a semblance of Youtube gui while watching videos downloaded using youtube-dl.

Put your videos in a folder called `/mv/` and the corresponding thumbnails in `/mv/thumbs/` or next to the files.

You can use `--write-thumbnail` option of `youtube-dl` while downloading the video to save the thumbnail as well.
You can also use the included `youtubethumbs.py` to fetch the thumbnails if you have video IDs included in the filename.
You need `wget` for this.
