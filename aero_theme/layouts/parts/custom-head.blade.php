@inject('headContent', 'BookStack\Theming\CustomHtmlHeadContentProvider')

<!-- Start: theme styles -->
<style>
html {
  height: auto;
  background-color: #fff;
}

html.dark-mode {
  background-color: #000;
}

#main-content.scroll-body {
  height:100vh;
}

body:not(#tinymce) { 
  background: 
    linear-gradient(to bottom, rgba(255, 255, 255, 0) 80%, rgba(255, 255, 255, 1) 100%),
    url(http://bookstack.local/uploads/images/gallery/2024-06/scaled-1680-/dumb-bg-compressed-dwecdkas.png) top / 100% 100vh no-repeat fixed;
  background-color: #fff;
}

.dark-mode body:not(#tinymce) {
  background-color: #000;
  background: 
    linear-gradient(to bottom, rgba(0, 0, 0, 0) 80%, rgba(0, 0, 0, 1) 100%),
    url(http://bookstack.local/uploads/images/gallery/2024-06/scaled-1680-/dumb-bg-compressed-dwecdkas.png) top / 100% 100vh no-repeat fixed;
}

.page-content .cm-editor:not(.dark-mode .cm-editor) {
  background-color: #F4F4F4;
}

.page-content hr {
  height: 2px;
}

#content #main-content.height-fill {
  height: 90vh !important;
}

#main-content > div > div.grid.gap-xxl.right-focus > div:nth-child(1) {
  background-color: rgba(255, 255, 255, .74);
  border-radius: 8px;
  border-style: solid;
  border-width: 0px;
  border-color: rgb(229, 231, 235);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px;
  box-sizing: border-box;
  backdrop-filter: blur(20px);
  padding:20px;
}

.tri-layout-right, .tri-layout-left, .page-edit-toolbar {
  background-color: rgba(255, 255, 255, .74);
  border-radius: 8px;
  border-style: solid;
  border-width: 0px;
  border-color: rgb(229, 231, 235);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px;
  box-sizing: border-box;
  backdrop-filter: blur(20px);
  margin-top: 35px;
}

.tri-layout-right, .tri-layout-left {
  height: 90%;
}

.dark-mode .tri-layout-right, .dark-mode .tri-layout-left, .dark-mode .page-edit-toolbar {
  background-color: rgba(0, 0, 0, .74);
  border-radius: 8px;
  border-style: solid;
  border-width: 0px;
  border-color: rgb(229, 231, 235);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px;
  box-sizing: border-box;
  backdrop-filter: blur(20px);
  margin-top: 35px;
}

.dark-mode #main-content > div:nth-child(1) > nav {
  background-color: rgba(0, 0, 0, .74);
  border-radius: 8px;
  opacity: 1;
}

@media (min-width: 1750px) {
  .tri-layout-sides-content {
    grid-template-columns: 1.5fr 4fr 1.5fr !important;
  }
}

@media (max-width: 1400px) {
  div#sidebar.tri-layout-left.print-hidden {
    display: none;
  }
}

@media (max-width: 1000px) {
  .tri-layout-right {
margin-top: auto;
    }
      .tri-layout-container.show-info .tri-layout-right>*, .tri-layout-container.show-info .tri-layout-left>* {
        padding: 20px;
        margin-bottom: 40px;
        }
}

  
@media screen and (min-width: 1000px) {
  .tri-layout-left-contents>*, .tri-layout-right-contents>* {
    padding: 10px;
  }
}

#sibling-navigation {
  background-color: rgba(255, 255, 255, .6);
  border-radius: 8px;
  opacity: 1;
  backdrop-filter: blur(20px);
}

.dark-mode #sibling-navigation {
  background-color: rgba(0, 0, 0, .74);
  border-radius: 8px;
  color: #fff;
  opacity: 1;
  backdrop-filter: blur(20px);
}

.dark-mode #sibling-navigation a .text-muted {
  color: #fff !important;
}

.dark-mode .comments-container {
  border-radius: 8px;
  background-color: rgba(0, 0, 0, .74);
  padding: 30px 20px;
}

.dark-mode .comments-container button {
  background-color: rgba(0, 0, 0, .74);
  color: #fff !important;
}

.tri-layout-right-contents>*, .tri-layout-left-contents>* {
  opacity: 1 !important;
}

.button {
  background-color: rgba(255, 255, 255, .74);
}

button[type="submit"]:not(.icon-list-item, [aria-label="Search"]) {
  background-color: #000 !important;
}

#login-form button {
  background-color: #000;
}
</style>
<!-- End: theme styles -->

@if(setting('app-custom-head') && !request()->routeIs('settings.category'))
<!-- Start: custom user content -->
{!! $headContent->forWeb() !!}
<!-- End: custom user content -->
@endif