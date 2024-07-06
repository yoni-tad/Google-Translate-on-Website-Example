# Google-Translate-on-Website-Example

## Description

This project demonstrates how to implement Google Translate on any website. The main feature allows translating the webpage into more than 10 languages using JavaScript.

## Features

- Easily integrate Google Translate into any website.
- Supports translation into over 10 languages.

## Usage

To use Google Translate on your website, follow these steps:

### Step 1: Include the Google Translate Widget Script

Add the following script to your HTML file to include the Google Translate widget:

```html
<!-- Google Translate Widget Script -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      { pageLanguage: "en" },
      "google_translate_element"
    );
  }
</script>
<script
  type="text/javascript"
  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
></script>
