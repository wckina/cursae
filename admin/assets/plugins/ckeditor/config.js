/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
   config.filebrowserBrowseUrl = '/admin/assets/plugins/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/admin/assets/plugins/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/admin/assets/plugins/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/admin/assets/plugins/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/admin/assets/plugins/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/admin/assets/plugins/kcfinder/upload.php?opener=ckeditor&type=flash';
   config.filebrowserFlashUploadUrl = '/admin/assets/plugins/kcfinder/upload.php?opener=ckeditor&type=zip';
   config.allowedContent = true;
   config.extraPlugins = 'tableresize';
   config.extraPlugins = 'youtube';
};
