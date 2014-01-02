img-gallery
===========

A little WordPress module used for the creating of image galleries. It works together with [Advanced Custom Fields](http://www.advancedcustomfields.com/), using the [Gallery Field](http://www.advancedcustomfields.com/add-ons/gallery-field/) add-on.

## Implementation

1. Drop this folder (maybe as a git submodule) into your theme.
2. Create an ACF form to create galleries. The ID of the gallery field must be: "acf_galerie_images".
3. Optionally, you can add a caption field for the gallery, named "acf_infos_photographe".
4. Add a call to `gallery-function.php` into your main `functions.php` file.
5. Add a call to `gallery-init.php` and `gallery-output.php` to your templates where appropriate.

## FAQ

Why are "init" and "output" separate?

In some situations, you want to test early on if an image gallery is present. It may trigger a different type of layout for your page. 

Or you may want to build your own custom output method, but still use the generic array-builder.

## License?

This code is free and unencumbered software released into the public domain, under the terms of the [Unlicense](LICENSE).