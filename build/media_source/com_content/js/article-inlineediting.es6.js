/**
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
((document,submitForm) => {
  'use strict';

  // Selectors used by this script
  const buttonDataSelector = 'data-submit-task';
  const formId = 'adminForm';

  tinymce.init({
    selector: '.editable',
    menubar: false,
    inline: true,
    plugins: [
      'link',
      'lists',
      'powerpaste',
      'autolink',
      'tinymcespellchecker'
    ],
    toolbar: [
      'undo redo | bold italic underline | fontselect fontsizeselect',
      'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
    ]
  });
  /**
   * Submit the task
   * @param task
   */
  const submitTask = (task) => {
    const form = document.getElementById(formId);
    if (task === 'article.cancel' || document.formvalidator.isValid(form)) {
      submitForm(task, form);
    }
  };

  // Register events
  document.addEventListener('DOMContentLoaded', () => {

    var x = 5;
    console.log(Joomla.getOptions('original_article_text'));

    var articleBody = document.getElementById("test");
    articleBody.addEventListener('onmousedown', (e) => {
      articleBody.innerHTML = Joomla.getOptions('original_article_text');
      });

    console.log(document.getElementById("test").innerHTML);

    const buttons = [].slice.call(document.querySelectorAll(`[${buttonDataSelector}]`));
    buttons.forEach((button) => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const task = e.target.getAttribute(buttonDataSelector);
        submitTask(task);
      });
    });
  });
})(document, Joomla.submitform);
