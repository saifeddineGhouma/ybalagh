CKEditor 4 Changelog
====================

## CKEditor 4.5.4

New Features:

* [#13632](http://dev.ckeditor.com/ticket/13632): Introduce error logging mechanism.
* [#13730](http://dev.ckeditor.com/ticket/13730): Switch to the new error logging mechanism.

Fixed Issues:

* [#9856](http://dev.ckeditor.com/ticket/9856): Fixed: Cannot use the native context menu together with the [Div Editing Area](http://ckeditor.com/addon/divarea) plugin. Thanks to [Mark Wade](https://github.com/mark-wade)!
* [#12733](http://dev.ckeditor.com/ticket/12733): [IE9+] Fixed: Radio button `onChange` does not work. Thanks to [Iliya Kostadinov](https://github.com/iliyakostadinov)!
* [#13142](http://dev.ckeditor.com/ticket/13142): [Edge] Fixed: *Ctrl+A* and then *Backspace* result in an empty `<div>` element.
* [#13599](http://dev.ckeditor.com/ticket/13599): Fixed: Cross-editor drag and drop of an inline widget results in error/artifacts.
* [#13640](http://dev.ckeditor.com/ticket/13640): [IE] Fixed: Dropping a widget outside the `<body>` element is not handled correctly.
* [#13533](http://dev.ckeditor.com/ticket/13533): Fixed: No progress during upload.
* [#13680](http://dev.ckeditor.com/ticket/13680): Fixed: The parser should allow the `<h1-6>` element to be a child of the `<summary>` element.
* [#11724](http://dev.ckeditor.com/ticket/11724): [Touch devices] Fixed: Drop-downs often hide right after opening them.
* [#13690](http://dev.ckeditor.com/ticket/13690): Fixed: Copying content from IE to Chrome adds an extra paragraph.
* [#13284](http://dev.ckeditor.com/ticket/13284): Fixed: Cannot drag and drop a widget if the text caret is placed just after the widget instance.
* [#13516](http://dev.ckeditor.com/ticket/13516): Fixed: CKEditor removes empty HTML5 anchors without the `name` attribute.
* [#13765](http://dev.ckeditor.com/ticket/13765): [Safari 9] Fixed: Problems with rendering samples.

Other Changes:

* [#11725](http://dev.ckeditor.com/ticket/11725): Marked [`CKEDITOR.env.mobile`](http://docs.ckeditor.com/#!/api/CKEDITOR.env-property-mobile) as deprecated. The reason is that it is no longer clear what "mobile" means.
* [#13737](http://dev.ckeditor.com/ticket/13737): Upgraded [Bender.js](https://github.com/benderjs/benderjs) to 0.4.1.

## CKEditor 4.5.3

New Features:

* [#13501](http://dev.ckeditor.com/ticket/13501): Added the [`config.fileTools_defaultFileName`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-fileTools_defaultFileName) option to allow setting a default filen ame for paste uploads.
* [#13603](http://dev.ckeditor.com/ticket/13603): Added support for uploading dropped BMP images.

Fixed Issues:

* [#13590](http://dev.ckeditor.com/ticket/13590): Fixed: Various issues related to the [Paste from Word](http://ckeditor.com/addon/pastefromword) feature. Fixes also:
  * [#11215](http://dev.ckeditor.com/ticket/11215),
  * [#8780](http://dev.ckeditor.com/ticket/8780),
  * [#12762](http://dev.ckeditor.com/ticket/12762).
* [#13386](http://dev.ckeditor.com/ticket/13386): [Edge] Fixed: Issues with selecting and editing images.
* [#13568](http://dev.ckeditor.com/ticket/13568): Fixed: The [`editor.getSelectedHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSelectedHtml) method returns invalid results for entire content selection.
* [#13453](http://dev.ckeditor.com/ticket/13453): Fixed: Drag&drop of entire editor content throws an error.
* [#13465](http://dev.ckeditor.com/ticket/13465): Fixed: Error is thrown and the widget is lost on drag&drop if it is the only content of the editor.
* [#13414](http://dev.ckeditor.com/ticket/13414): Fixed: Content auto paragraphing in a nested editable despite editor configuration.
* [#13429](http://dev.ckeditor.com/ticket/13429): Fixed: Incorrect selection after content insertion by the [Auto Embed](http://ckeditor.com/addon/autoembed) plugin.
* [#13388](http://dev.ckeditor.com/ticket/13388): Fixed: [Table Resize](http://ckeditor.com/addon/tableresize) integration with [Undo](http://ckeditor.com/addon/undo) is broken.

Other Changes:

* [#13637](https://dev.ckeditor.com/ticket/13637): Several icons were refactored.
* Updated [Bender.js](https://github.com/benderjs/benderjs) to 0.3.0 and introduced the ability to run tests via HTTPs ([#13265](https://dev.ckeditor.com/ticket/13265)).

## CKEditor 4.5.2

Fixed Issues:

* [#13609](http://dev.ckeditor.com/ticket/13609): [Edge] Fixed: The browser crashes when switching to the source mode. Thanks to [Andrew Williams and Mark Smeed](http://webxsolution.com/)!
* [PR#201](https://github.com/ckeditor/ckeditor-dev/pull/201): Fixed: Buttons in the toolbar configurator cause form submission. Thanks to [colemanw](https://github.com/colemanw)!
* [#13422](http://dev.ckeditor.com/ticket/13422): Fixed: A monospaced font should be used in the `<textarea>` element storing editor configuration in the toolbar configurator.
* [#13494](http://dev.ckeditor.com/ticket/13494): Fixed: Error thrown in the toolbar configurator if plugin requirements are not met.
* [#13409](http://dev.ckeditor.com/ticket/13409): Fixed: List elements incorrectly merged when pressing *Backspace* or *Delete*.
* [#13434](http://dev.ckeditor.com/ticket/13434): Fixed: Dialog state indicator broken in Right–To–Left environments.
* [#13460](http://dev.ckeditor.com/ticket/13460): [IE8] Fixed: Copying inline widgets is broken when [Advanced Content Filter](http://docs.ckeditor.com/#!/guide/dev_acf) is disabled.
* [#13495](http://dev.ckeditor.com/ticket/13495): [Firefox, IE] Fixed: Text is not word-wrapped in the Paste dialog window.
* [#13528](http://dev.ckeditor.com/ticket/13528): [Firefox@Windows] Fixed: Content copied from Microsoft Word and other external applications is pasted as a plain text. Removed the `CKEDITOR.plugins.clipboard.isHtmlInExternalDataTransfer` property as the check must be dynamic.
* [#13583](http://dev.ckeditor.com/ticket/13583): Fixed: [`DataTransfer.getData()`](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.clipboard.dataTransfer-method-getData) should work consistently in all browsers and should not strip valuable content. Fixed pasting tables from Microsoft Excel on Chrome.
* [#13468](http://dev.ckeditor.com/ticket/13468): [IE] Fixed: Binding drag&drop `dataTransfer` does not work if `text` data was set in the meantime.
* [#13451](http://dev.ckeditor.com/ticket/13451): [IE8-9] Fixed: One drag&drop operation may affect following ones.
* [#13184](http://dev.ckeditor.com/ticket/13184): Fixed: Web page reloaded after a drop on editor UI.
* [#13129](http://dev.ckeditor.com/ticket/13129) Fixed: Block widget blurred after a drop followed by an undo.
* [#13397](http://dev.ckeditor.com/ticket/13397): Fixed: Drag&drop of a widget inside its nested widget crashes the editor.
* [#13385](http://dev.ckeditor.com/ticket/13385): Fixed: [`editor.getSnapshot()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSnapshot) may return a non-string value.
* [#13419](http://dev.ckeditor.com/ticket/13419): Fixed: The [Auto Link](http://ckeditor.com/addon/autolink) plugin does not encode double quotes in URLs.
* [#13420](http://dev.ckeditor.com/ticket/13420): Fixed: The [Auto Embed](http://ckeditor.com/addon/autoembed) plugin ignores encoded characters in URL parameters.
* [#13410](http://dev.ckeditor.com/ticket/13410): Fixed: Error thrown in the [Auto Embed](http://ckeditor.com/addon/autoembed) plugin when undoing right after pasting a link.
* [#13566](http://dev.ckeditor.com/ticket/13566): Fixed: Suppressed notifications in the [Media Embed Base](http://ckeditor.com/addon/embedbase) plugin.
* [#11616](http://dev.ckeditor.com/ticket/11616): [Chrome] Fixed: Resizing the editor while it is not displayed breaks the editable. Fixes also [#9160](http://dev.ckeditor.com/ticket/9160) and [#9715](http://dev.ckeditor.com/ticket/9715).
* [#11376](http://dev.ckeditor.com/ticket/11376): [IE11] Fixed: Loss of text when pasting bulleted lists from Microsoft Word.
* [#13143](http://dev.ckeditor.com/ticket/13143): [Edge] Fixed: Focus lost when opening the panel.
* [#13387](http://dev.ckeditor.com/ticket/13387): [Edge] Fixed: "Permission denied" error thrown when loading the editor with developer tools open.
* [#13574](http://dev.ckeditor.com/ticket/13574): [Edge] Fixed: "Permission denied" error thrown when opening editor dialog windows.
* [#13441](http://dev.ckeditor.com/ticket/13441): [Edge] Fixed: The [Clipboard](http://ckeditor.com/addon/clipboard) plugin breaks the state of [Undo](http://ckeditor.com/addon/undo) commands after a paste.
* [#13554](http://dev.ckeditor.com/ticket/13554): [Edge] Fixed: Paste dialog's iframe does not receive focus on show.
* [#13440](http://dev.ckeditor.com/ticket/13440): [Edge] Fixed: Unable to paste a widget.

Other Changes:

* [#13421](http://dev.ckeditor.com/ticket/13421): UX improvements to notifications in the [Auto Embed](http://ckeditor.com/addon/autoembed) plugin.

## CKEditor 4.5.1

Fixed Issues:

* [#13486](http://dev.ckeditor.com/ticket/13486): Fixed: The [Upload Image](http://ckeditor.com/addon/uploadimage) plugin should log an error, not throw an error when upload URL is not set.

## CKEditor 4.5

New Features:

* [#13304](http://dev.ckeditor.com/ticket/13304): Added support for passing DOM elements to [`config.sharedSpaces`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-sharedSpaces). Thanks to [Undergrounder](https://github.com/Undergrounder)!
* [#13215](http://dev.ckeditor.com/ticket/13215): Added ability to cancel fetching a resource by the Embed plugins.
* [#13213](http://dev.ckeditor.com/ticket/13213): Added the [`dialog#setState()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dialog-method-setState) method and used it in the [Embed](http://ckeditor.com/addon/embed) dialog to indicate that a resource is being loaded.
* [#13337](http://dev.ckeditor.com/ticket/13337): Added the [`repository.onWidget()`](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget.repository-method-onWidget) method &mdash; a convenient way to listen to [widget](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget) events through the [repository](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget.repository).
* [#13214](http://dev.ckeditor.com/ticket/13214): Added support for pasting links that convert into embeddable resources on the fly.

Fixed Issues:

* [#13334](http://dev.ckeditor.com/ticket/13334): Fixed: Error after nesting widgets and playing with undo/redo.
* [#13118](http://dev.ckeditor.com/ticket/13118): Fixed: The [`editor.getSelectedHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSelectedHtml) method throws an error when called in the source mode.
* [#13158](http://dev.ckeditor.com/ticket/13158): Fixed: Error after canceling a dialog when creating a widget.
* [#13197](http://dev.ckeditor.com/ticket/13197): Fixed: Linked inline [Enhanced Image](http://ckeditor.com/addon/image2) alignment class is not transferred to the widget wrapper.
* [#13199](http://dev.ckeditor.com/ticket/13199): Fixed: [Semantic Embed](http://ckeditor.com/addon/embedsemantic) does not support widget classes.
* [#13003](http://dev.ckeditor.com/ticket/13003): Fixed: Anchors are uploaded when moving them by drag and drop.
* [#13032](http://dev.ckeditor.com/ticket/13032): Fixed: When upload is done, notification update should be marked as important.
* [#13300](http://dev.ckeditor.com/ticket/13300): Fixed: The `internalCommit` argument in the [Image](http://ckeditor.com/addon/image) dialog seems to be never used.
* [#13036](http://dev.ckeditor.com/ticket/13036): Fixed: Notifications are moved 10px to the right.
* [#13280](http://dev.ckeditor.com/ticket/13280): [IE8] Fixed: Undo after inline widget drag&drop throws an error.
* [#13186](http://dev.ckeditor.com/ticket/13186): Fixed: Content dropped into a nested editable is not filtered by [Advanced Content Filter](http://docs.ckeditor.com/#!/guide/dev_acf).
* [#13140](http://dev.ckeditor.com/ticket/13140): Fixed: Error thrown when dropping a block widget right after itself.
* [#13176](http://dev.ckeditor.com/ticket/13176): [IE8] Fixed: Errors on drag&drop of embed widgets.
* [#13015](http://dev.ckeditor.com/ticket/13015): Fixed: Dropping an image file on [Enhanced Image](http://ckeditor.com/addon/image2) causes a page reload.
* [#13080](http://dev.ckeditor.com/ticket/13080): Fixed: Ugly notification shown when the response contains HTML content.
* [#13011](http://dev.ckeditor.com/ticket/13011): [IE8] Fixed: Anchors are duplicated on drag&drop in specific locations.
* [#13105](http://dev.ckeditor.com/ticket/13105): Fixed: Various issues related to [`CKEDITOR.tools.htmlEncode()`](http://docs.ckeditor.com/#!/api/CKEDITOR.tools-method-htmlEncode) and [`CKEDITOR.tools.htmlDecode()`](http://docs.ckeditor.com/#!/api/CKEDITOR.tools-method-htmlDecode) methods.
* [#11976](http://dev.ckeditor.com/ticket/11976): [Chrome] Fixed: Copy&paste and drag&drop lists from Microsoft Word.
* [#13128](http://dev.ckeditor.com/ticket/13128): Fixed: Various issues with cloning element IDs:
  * Fixed the default behavior of [`range.cloneContents()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.range-method-cloneContents) and [`range.extractContents()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.range-method-extractContents) methods which now clone IDs similarly to their native counterparts.
  * Added `cloneId` arguments to the above methods, [`range.splitBlock()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.range-method-splitBlock) and [`element.breakParent()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-breakParent). Mind the default values and special behavior in the `extractContents()` method!
  * Fixed issues where IDs were lost on copy&paste and drag&drop.
* Toolbar configurators:
  * [#13185](http://dev.ckeditor.com/ticket/13185): Fixed: Wrong position of the suggestion box if there is not enough space below the caret.
  * [#13138](http://dev.ckeditor.com/ticket/13138): Fixed: The "Toggle empty elements" button label is unclear.
  * [#13136](http://dev.ckeditor.com/ticket/13136): Fixed: Autocompleter is far too intrusive.
  * [#13133](http://dev.ckeditor.com/ticket/13133): Fixed: Tab leaves the editor.
  * [#13173](http://dev.ckeditor.com/ticket/13173): Fixed: [`config.removeButtons`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-removeButtons) is ignored by the advanced toolbar configurator.

Other Changes:

* [#13119](http://dev.ckeditor.com/ticket/13119): Improved compatibility of editor skins ([Moono](http://ckeditor.com/addon/moono) and [Kama](http://ckeditor.com/addon/kama)) with external web page style sheets.
* Toolbar configurators:
  * [#13147](http://dev.ckeditor.com/ticket/13147): Added buttons to the sticky toolbar.
  * [#13207](http://dev.ckeditor.com/ticket/13207): Used modal window to display toolbar configurator help.
* [#13316](http://dev.ckeditor.com/ticket/13316): Made [`CKEDITOR.env.isCompatible`](http://docs.ckeditor.com/#!/api/CKEDITOR.env-property-isCompatible) a blacklist rather than a whitelist. More about the change in the [Browser Compatibility](http://docs.ckeditor.com/#!/guide/dev_browsers) guide.
* [#13398](http://dev.ckeditor.com/ticket/13398): Renamed `CKEDITOR.fileTools.UploadsRepository` to [`CKEDITOR.fileTools.UploadRepository`](http://docs.ckeditor.com/#!/api/CKEDITOR.fileTools.uploadRepository) and changed all related properties.
* [#13279](http://dev.ckeditor.com/ticket/13279): Reviewed CSS vendor prefixes.
* [#13454](http://dev.ckeditor.com/ticket/13454): Removed unused `lang.image.alertUrl` token from the [Image](http://ckeditor.com/addon/image) plugin.

## CKEditor 4.5 Beta

New Features:

* Clipboard (copy&paste, drag&drop) and file uploading features and improvements ([#11437](http://dev.ckeditor.com/ticket/11437)).

  * Major features:
    * Support for dropping and pasting files into the editor was introduced. Through a set of new facades for native APIs it is now possible to easily intercept and process inserted files.
    * [File upload tools](http://docs.ckeditor.com/#!/api/CKEDITOR.fileTools) were introduced in order to simplify controlling the loading, uploading and handling server response, properly handle [new upload configuration](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-uploadUrl) options, etc.
    * [Upload Image](http://ckeditor.com/addon/uploadimage) widget was introduced to upload dropped images. A base class for the [upload widget](http://docs.ckeditor.com/#!/api/CKEDITOR.fileTools.uploadWidgetDefinition) was exposed, too, to make it simple to create new types of upload widgets which can handle any type of dropped file, show the upload progress and update the content when the process is done. It also handles editing and undo/redo operations when a file is being uploaded and integrates with the [notification aggregator](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.notificationAggregator) to show progress and success or error.
    * All drag and drop operations were integrated with the editor. All dropped content is passed through the [`editor#paste`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-paste) event and a set of new editor events was introduced &mdash; [`dragstart`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-dragstart), [`drop`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-drop), [`dragend`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-dragend).
    * The [Data Transfer](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.clipboard.dataTransfer) facade was introduced to unify access to data in various types and files. [Data Transfer](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.clipboard.dataTransfer) is now always available in the [`editor#paste`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-paste) event.
    * Switched from the pastebin to using the native clipboard access whenever possible. This solved many issues related to pastebin such as unnecessary scrolling or data loss. Additionally, on copy and cut from the editor the clipboard data is set. Therefore, on paste the editor has access to clean data, undisturbed by the browsers.
    * Drag and drop of inline and block widgets was integrated with the standard clipboard APIs. By listening to drag events you will thus be notified about widgets, too. This opens a possibility to filter pasted and dropped widgets.
    * The [`editor#paste`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-paste) event can have the `range` parameter so it is possible to change the paste position in the listener or paste in the not selectable position. Also the [`editor.insertHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml) method now accepts `range` as an additional parameter.
    * [#11621](http://dev.ckeditor.com/ticket/11621): A configurable [paste filter](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-pasteFilter) was introduced. The filter is by default turned to `'semantic-content'` on Webkit and Blink for all pasted content coming from external sources because of the low quality of HTML that these engines put into the clipboard. Internal and cross-editor paste is safe due to the change explained in the previous point.

  * Other changes and related fixes:
    * [#12095](http://dev.ckeditor.com/ticket/12095): On drag and copy of widgets [the same method](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSelectedHtml) is used to get selected HTML as in the normal case. Thanks to that styles applied to inline widgets are not lost.
    * [#11219](http://dev.ckeditor.com/ticket/11219): Fixed: Dragging a [captioned image](http://ckeditor.com/addon/image2) does not fire the [`editor#paste`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-paste) event.
    * [#9554](http://dev.ckeditor.com/ticket/9554): [Webkit Mac] Fixed: Editor scrolls on paste.
    * [#9898](http://dev.ckeditor.com/ticket/9898): [Webkit&Divarea] Fixed: Pasting causes undesirable scrolling.
    * [#11993](http://dev.ckeditor.com/ticket/11993): [Chrome] Fixed: Pasting content scrolls the document.
    * [#12613](http://dev.ckeditor.com/ticket/12613): Show the user that they can not drop on editor UI (toolbar, bottom bar).
    * [#12851](http://dev.ckeditor.com/ticket/12851): [Blink/Webkit] Fixed: Formatting disappears when pasting content into cells.
    * [#12914](http://dev.ckeditor.com/ticket/12914): Fixed: Copy/Paste of table broken in `div`-based editor.

  * Browser support.<br>Browser support for related features varies significantly (see http://caniuse.com/clipboard).
    * File APIs needed to operate and file upload is not supported in Internet Explorer 9 and below.
    * Only Chrome and Safari on Mac OS support setting custom data items in the clipboard, so currently it is possible to recognize the origin of the copied content in these browsers only. All drag and drop operations can be identified thanks to the new Data Transfer facade.
    * No Internet Explorer browser supports the standard clipboard API which results in small glitches like where only plain text can be dropped from outside the editor. Thanks to the new Data Transfer facade, internal and cross-editor drag and drop supports the full range of data.
    * Direct access to clipboard could only be implemented in Chrome, Safari on Mac OS, Opera and Firefox. In other browsers the pastebin must still be used.

* [#12875](http://dev.ckeditor.com/ticket/12875): Samples and toolbar configuration tools.
  * The old set of samples shipped with every CKEditor package was replaced with a shiny new single-page sample. This change concluded a long term plan which started from introducing the [CKEditor SDK](http://sdk.ckeditor.com/) and [CKEditor Functionality Overview](http://docs.ckeditor.com/#!/guide/dev_features) section in the documentation which essentially redefined the old samples.
  * Toolbar configurators with live previews were introduced. They will be shipped with every CKEditor package and are meant to help in configuring toolbar layouts.

* [#10925](http://dev.ckeditor.com/ticket/10925): The [Media Embed](http://ckeditor.com/addon/embed) and [Semantic Media Embed](http://ckeditor.com/addon/embedsemantic) plugins were introduced. Read more about the new features in the [Embedding Content](http://docs.ckeditor.com/#!/guide/dev_media_embed) article.
* [#10931](http://dev.ckeditor.com/ticket/10931): Added support for nesting widgets. It is now possible to insert one widget into another widget's nested editable. Note that unless nested editable's [allowed content](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget.nestedEditable.definition-property-allowedContent) is defined precisely, starting from CKEditor 4.5 some widget buttons may become enabled. This feature is not supported in IE8. Included issues:
  * [#12018](http://dev.ckeditor.com/ticket/12018): Fixed and reviewed: Nested widgets garbage collection.
  * [#12024](http://dev.ckeditor.com/ticket/12024): [Firefox] Fixed: Outline is extended to the left by unpositioned drag handlers.
  * [#12006](http://dev.ckeditor.com/ticket/12006): Fixed: Drag and drop of nested block widgets.
  * [#12008](http://dev.ckeditor.com/ticket/12008): Fixed various cases of inserting a single non-editable element using the [`editor.insertHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml) method. Fixes pasting a widget with a nested editable inside another widget's nested editable.

* Notification system:
  * [#11580](http://dev.ckeditor.com/ticket/11580): Introduced the [notification system](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.notification).
  * [#12810](http://dev.ckeditor.com/ticket/12810): Introduced a [notification aggregator](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.notificationAggregator) for the [notification system](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.notification) which simplifies displaying progress of many concurrent tasks.
* [#11636](http://dev.ckeditor.com/ticket/11636): Introduced new, UX-focused, methods for getting selected HTML and deleting it &mdash; [`editor.getSelectedHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSelectedHtml) and [`editor.deleteSelectedHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getSelectedHtml).
* [#12416](http://dev.ckeditor.com/ticket/12416): Added the [`widget.definition.upcastPriority`](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget.definition-property-upcastPriority) property which gives more control over widget upcasting order to the widget author.
* [#12036](http://dev.ckeditor.com/ticket/12036): Initialize the editor in [read-only](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-property-readOnly) mode when the `<textarea>` element has a `readonly` attribute.
* [#11905](http://dev.ckeditor.com/ticket/11905): The [`resize` event](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-resize) passes the current dimensions in its data.
* [#12126](http://dev.ckeditor.com/ticket/12126): Introduced [`config.image_prefillDimensions`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-image_prefillDimensions) and [`config.image2_prefillDimensions`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-image2_prefillDimensions) to make pre-filling `width` and `height` configurable for the [Enhanced Image](http://ckeditor.com/addon/image2).
* [#12746](http://dev.ckeditor.com/ticket/12746): Added a new configuration option to hide the [Enhanced Image](http://ckeditor.com/addon/image2) resizer.
* [#12150](http://dev.ckeditor.com/ticket/12150): Exposed the [`getNestedEditable()`](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget-static-method-getNestedEditable) and `is*` [widget helper](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget) functions (see the static methods).
* [#12448](http://dev.ckeditor.com/ticket/12448): Introduced the [`editable.insertHtmlIntoRange`](http://docs.ckeditor.com/#!/api/CKEDITOR.editable-method-insertHtmlIntoRange) method.
* [#12143](http://dev.ckeditor.com/ticket/12143): Added the [`config.floatSpacePreferRight`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-floatSpacePreferRight) configuration option that switches the alignment of the floating toolbar. Thanks to [InvisibleBacon](http://github.com/InvisibleBacon)!
* [#10986](http://dev.ckeditor.com/ticket/10986): Added support for changing dialog input and textarea text directions by using the *Shift+Alt+Home/End* keystrokes. The direction is stored in the value of the input by prepending the [`\u202A`](http://unicode.org/cldr/utility/character.jsp?a=202A) or [`\u202B`](http://unicode.org/cldr/utility/character.jsp?a=202B) marker to it. Read more in the [documentation](http://docs.ckeditor.com/#!/api/CKEDITOR.dialog.definition.textInput-property-bidi). Thanks to [edithkk](https://github.com/edithkk)!
* [#12770](http://dev.ckeditor.com/ticket/12770): Added support for passing [widget](http://docs.ckeditor.com/#!/api/CKEDITOR.plugins.widget)'s startup data as a widget command's argument. Thanks to [Rebrov Boris](https://github.com/zipp3r) and [Tieme van Veen](https://github.com/tiemevanveen)!
* [#11583](http://dev.ckeditor.com/ticket/11583): Added support for the HTML5 `required` attribute in various form elements. Thanks to [Steven Busse](https://github.com/sbusse)!

Changes:

* [#12858](http://dev.ckeditor.com/ticket/12858): Basic [Spartan](http://blogs.windows.com/bloggingwindows/2015/03/30/introducing-project-spartan-the-new-browser-built-for-windows-10/) browser compatibility. Full compatibility will be introduced later, because at the moment Spartan is still too unstable to be used for tests and we see many changes from version to version.
* [#12948](http://dev.ckeditor.com/ticket/12948): The [`config.mathJaxLibrary`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-mathJaxLib) option does not default to the MathJax CDN any more. It needs to be configured to enable the [Mathematical Formulas](http://ckeditor.com/addon/mathjax) plugin now.
* [#13069](http://dev.ckeditor.com/ticket/13069): Fixed inconsistencies between [`editable.insertHtml()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editable-method-insertElement) and [`editable.insertElement()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editable-method-insertElement) when the `range` parameter is used. Now, the `editor.insertElement()` method works on a higher level, which means that it saves undo snapshots and sets the selection after insertion. Use the [`editable.insertElementIntoRange()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editable-method-insertElementIntoRange) method directly for the pre 4.5 behavior of `editable.insertElement()`.
* [#12870](http://dev.ckeditor.com/ticket/12870): Use [`editor.showNotification()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-showNotification) instead of `alert()` directly whenever possible. When the [Notification plugin](http://ckeditor.com/addon/notification) is loaded, the notification system is used automatically. Otherwise, the native `alert()` is displayed.
* [#8024](http://dev.ckeditor.com/ticket/8024): Swapped behavior of the Split Cell Vertically and Horizontally features of the [Table Tools](http://ckeditor.com/addon/tabletools) plugin to be more intuitive. Thanks to [kevinisagit](https://github.com/kevinisagit)!
* [#10903](http://dev.ckeditor.com/ticket/10903): Performance improvements for the [`dom.element.addClass()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-addClass), [`dom.element.removeClass()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-removeClass) and [`dom.element.hasClass()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-hasClass) methods. Note: The previous implementation allowed passing multiple classes to `addClass()` although it was only a side effect of that implementation. The new implementation does not allow this.
* [#11856](http://dev.ckeditor.com/ticket/11856): The jQuery adapter throws a meaningful error if CKEditor or jQuery are not loaded.

Fixed issues:

* [#11586](http://dev.ckeditor.com/ticket/11586): Fixed: [`range.cloneContents()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.range-method-cloneContents) should not change the DOM in order not to affect selection.
* [#12148](http://dev.ckeditor.com/ticket/12148): Fixed: [`dom.element.getChild()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-getChild) should not modify a passed array.
* [#12503](http://dev.ckeditor.com/ticket/12503): [Blink/Webkit] Fixed: Incorrect result of Select All and *Backspace* or *Delete*.
* [#13001](http://dev.ckeditor.com/ticket/13001): [Firefox] Fixed: The `<br />` filler is placed in the wrong position by the [`range.fixBlock()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.range-method-fixBlock) method due to quirky Firefox behavior.
* [#13101](http://dev.ckeditor.com/ticket/13101): [IE8] Fixed: Colons are prepended to HTML5 element names when cloning them.

## CKEditor 4.4.8

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [Dheeraj Joshi](https://twitter.com/dheerajhere) and [Prem Kumar](https://twitter.com/iAmPr3m).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

Fixed Issues:

* [#12899](http://dev.ckeditor.com/ticket/12899): Fixed: Corrected wrong tag ending for horizontal box definition in the [Dialog User Interface](http://ckeditor.com/addon/dialogui) plugin. Thanks to [mizafish](https://github.com/mizafish)!
* [#13254](http://dev.ckeditor.com/ticket/13254): Fixed: Cannot outdent block after indent when using the [Div Editing Area](http://ckeditor.com/addon/divarea) plugin. Thanks to [Jonathan Cottrill](https://github.com/jcttrll)!
* [#13268](http://dev.ckeditor.com/ticket/13268): Fixed: Documentation for [`CKEDITOR.dom.text`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.text) is incorrect. Thanks to [Ben Kiefer](https://github.com/benkiefer)!
* [#12739](http://dev.ckeditor.com/ticket/12739): Fixed: Link loses inline styles when edited without the [Advanced Tab for Dialogs](http://ckeditor.com/addon/dialogadvtab) plugin. Thanks to [Віталій Крутько](https://github.com/asmforce)!
* [#13292](http://dev.ckeditor.com/ticket/13292): Fixed: Protection pattern does not work in attribute in self-closing elements with no space before `/>`. Thanks to [Віталій Крутько](https://github.com/asmforce)!
* [PR#192](https://github.com/ckeditor/ckeditor-dev/pull/192): Fixed: Variable name typo in the [Dialog User Interface](http://ckeditor.com/addon/dialogui) plugin which caused [`CKEDITOR.ui.dialog.radio`](http://docs.ckeditor.com/#!/api/CKEDITOR.ui.dialog.radio) validation to not work. Thanks to [Florian Ludwig](https://github.com/FlorianLudwig)!
* [#13232](http://dev.ckeditor.com/ticket/13232): [Safari] Fixed: The [`element.appendText()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.element-method-appendText) method does not work properly for empty elements.
* [#13233](http://dev.ckeditor.com/ticket/13233): Fixed: [HTMLDataProcessor](http://docs.ckeditor.com/#!/api/CKEDITOR.htmlDataProcessor) can process `foo:href` attributes.
* [#12796](http://dev.ckeditor.com/ticket/12796): Fixed: The [Indent List](http://ckeditor.com/addon/indentlist) plugin unwraps parent `<li>` elements. Thanks to [Andrew Stucki](https://github.com/andrewstucki)!
* [#12885](http://dev.ckeditor.com/ticket/12885): Added missing [`editor.getData()`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData) parameter documentation.
* [#11982](http://dev.ckeditor.com/ticket/11982): Fixed: Bullet added in a wrong position after the *Enter* key is pressed in a nested list.
* [#13027](http://dev.ckeditor.com/ticket/13027): Fixed: Keyboard navigation in dialog windows with multiple tabs not following IBM CI 162 instructions or [ARIA Authoring Practices](http://www.w3.org/TR/2013/WD-wai-aria-practices-20130307/#tabpanel).
* [#12256](http://dev.ckeditor.com/ticket/12256): Fixed: Basic styles classes are lost when pasting from Microsoft Word if [basic styles](http://ckeditor.com/addon/basicstyles) were configured to use classes.
* [#12729](http://dev.ckeditor.com/ticket/12729): Fixed: Incorrect structure created when merging a block into a list item on *Backspace* and *Delete*.
* [#13031](http://dev.ckeditor.com/ticket/13031): [Firefox] Fixed: No more line breaks in source view since Firefox 36.
* [#13131](http://dev.ckeditor.com/ticket/13131): Fixed: The [Code Snippet](http://ckeditor.com/addon/codesnippet) plugin cannot be used without the [IFrame Editing Area](http://ckeditor.com/addon/wysiwygarea) plugin.
* [#9086](http://dev.ckeditor.com/ticket/9086): Fixed: Invalid ARIA property used on paste area `<iframe>`.
* [#13164](http://dev.ckeditor.com/ticket/13164): Fixed: Error when inserting a hidden field.
* [#13155](http://dev.ckeditor.com/ticket/13155): Fixed: Incorrect [Line Utilities](http://ckeditor.com/addon/lineutils) positioning when `<body>` has a margin.
* [#13351](http://dev.ckeditor.com/ticket/13351): Fixed: Link lost when editing a linked image with the Link tab disabled. This also fixed a bug when inserting an image into a fully selected link would throw an error ([#12847](https://dev.ckeditor.com/ticket/12847)).
* [#13344](http://dev.ckeditor.com/ticket/13344): [WebKit/Blink] Fixed: It is possible to remove or change editor content in [read-only mode](http://docs.ckeditor.com/#!/guide/dev_readonly).

Other Changes:

* [#12844](http://dev.ckeditor.com/ticket/12844) and [#13103](http://dev.ckeditor.com/ticket/13103): Upgraded the [testing environment](http://docs.ckeditor.com/#!/guide/dev_tests) to [Bender.js](https://github.com/benderjs/benderjs) `0.2.3`.
* [#12930](http://dev.ckeditor.com/ticket/12930): Because of licensing issues, `truncated-mathjax/` is now removed from the `tests/` directory. Now `bender.config.mathJaxLibPath` must be configured manually in order to run [Mathematical Formulas](http://ckeditor.com/addon/mathjax) plugin tests.
* [#13266](http://dev.ckeditor.com/ticket/13266): Added more shades of gray in the [Color Dialog](http://ckeditor.com/addon/colordialog) window. Thanks to [mizafish](https://github.com/mizafish)!


## CKEditor 4.4.7

Fixed Issues:

* [#12825](http://dev.ckeditor.com/ticket/12825): Fixed: Preventing the [Table Resize](http://ckeditor.com/addon/tableresize) plugin from operating on elements outside the editor. Thanks to [Paul Martin](https://github.com/Paul-Martin)!
* [#12157](http://dev.ckeditor.com/ticket/12157): Fixed: Lost text formatting on pressing *Tab* when the [`config.tabSpaces`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-tabSpaces) configuration option value was greater than zero.
* [#12777](http://dev.ckeditor.com/ticket/12777): Fixed: The `table-layout` CSS property should be reset by skins. Thanks to [vita10gy](https://github.com/vita10gy)!
* [#12812](http://dev.ckeditor.com/ticket/12812): Fixed: An uncaught security exception is thrown when [Line Utilities](http://ckeditor.com/addon/lineutils) are used in an inline editor loaded in a cross-domain `iframe`. Thanks to [Vitaliy Zurian](https://github.com/thecatontheflat)!
* [#12735](http://dev.ckeditor.com/ticket/12735): Fixed: [`config.fillEmptyBlocks`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-fillEmptyBlocks) should only apply when outputting data.
* [#10032](http://dev.ckeditor.com/ticket/10032): Fixed: [Paste from Word](http://ckeditor.com/addon/pastefromword) filter is executed for every paste after using the button.
* [#12597](http://dev.ckeditor.com/ticket/12597): [Blink/WebKit] Fixed: Multi-byte Japanese characters entry not working properly after *Shift+Enter*.
* [#12387](http://dev.ckeditor.com/ticket/12387): Fixed: An error is thrown if a skin does not have the [`chameleon`](http://docs.ckeditor.com/#!/api/CKEDITOR.skin-method-chameleon) property defined and [`config.uiColor`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-uiColor) is defined.
* [#12747](http://dev.ckeditor.com/ticket/12747): [IE8-10] Fixed: Opening a drop-down for a specific selection when the editor is maximized results in incorrect drop-down panel position.
* [#12850](http://dev.ckeditor.com/ticket/12850): [IEQM] Fixed: An error is thrown after focusing the editor.

## CKEditor 4.4.6

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [Maco Cortes](https://www.facebook.com/Maaacoooo).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

New Features:

* [#12501](http://dev.ckeditor.com/ticket/12501): Allowed dashes in element names in the [string format of allowed content rules](http://docs.ckeditor.com/#!/guide/dev_a