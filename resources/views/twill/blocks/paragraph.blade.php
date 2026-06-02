@twillBlockTitle('Абзац')
@twillBlockIcon('text')
@twillBlockGroup('app')

@php
$wysiwygOptions = [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    'blockquote',
    'code-block',
    'ordered',
    'bullet',
    'hr',
    'code',
    'link',
    'clean',
    'table',
    'align',
];
@endphp

<x-twill::wysiwyg
    name="text"
    label="Текст"
    :toolbar-options="$wysiwygOptions"
/>
