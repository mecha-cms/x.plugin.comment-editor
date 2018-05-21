(function($, win, doc) {
    var script = doc.currentScript || doc.getElementsByTagName('script').pop(),
        src = script.src,
        form = $.form,
        source = form && form.content, c, parent, edit;
    if (!source) return;
    c = src.match(/(?:\?|&(?:amp;)?)c=(\S+)(?:&(?:amp;)?|$)/);
    c = c && c[1] && JSON.parse(decodeURIComponent(c[1]));
    parent = source.parentNode;
    edit = new RTE(source, c.RTE || {});
    // Force comment `type` to `HTML`
    var input = doc.createElement('input');
    input.name = 'type';
    input.type = 'hidden';
    input.value = 'HTML';
    parent.appendChild(input);
})(window.COMMENT, window, document);