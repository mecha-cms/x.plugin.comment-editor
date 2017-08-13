(function($, win, doc) {
    var id = $.id,
        source = id && doc.getElementById(id), parent, edit;
    source = source && source.content;
    if (!source) return;
    parent = source.parentNode;
    edit = new RTE(source, $.RTE || {});
    // Force comment `type` to `HTML`
    var input = doc.createElement('input');
    input.name = 'type';
    input.value = 'HTML';
    input.type = 'hidden';
    parent.appendChild(input);
    // Add hook to the `on.comment.reply` event
    function fn(e, anchor) {
        edit.view.focus();
        edit.view.setAttribute('placeholder', anchor.title || source.placeholder || "");
    }
    $.set('on.comment.reply', fn);
})(window.COMMENT, window, document);