@props(['content' => ''])

@php
    $activeClasses = 'bg-neutral-lighter text-primary';
    $disabledClasses = 'disabled:opacity-50 disabled:pointer-events-none';
@endphp

<div x-data="editor(`{{ $content }}`)">
    <template x-if="isLoaded()">
        <div class="mb-2 flex gap-1 divide-x">
            <div class="flex">
                <x-button title="Отменить (Ctrl+Z)" size="icon" variant="none" @click="undoStep()" ::disabled="!canUndo(updatedAt)"
                    class="{{ $disabledClasses }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 14l-4 -4l4 -4" />
                        <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                    </svg>
                </x-button>
                <x-button title="Повторить (Ctrl+Y / Ctrl+Shift+Z)" size="icon" variant="none" @click="redoStep()"
                    ::disabled="!canRedo(updatedAt)" class="{{ $disabledClasses }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-forward-up">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 14l4 -4l-4 -4" />
                        <path d="M19 10h-11a4 4 0 1 0 0 8h1" />
                    </svg>
                </x-button>
            </div>
            <div class="flex">
                <x-button title="Полужирный (Ctrl+B)" size="icon" variant="none" @click="toggleBold()"
                    ::class="{ '{{ $activeClasses }}': isActive('bold', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bold">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />
                        <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                    </svg>
                </x-button>
                <x-button title="Курсив (Ctrl+I)" size="icon" variant="none" @click="toggleItalic()"
                    ::class="{ '{{ $activeClasses }}': isActive('italic', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-italic">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 5l6 0" />
                        <path d="M7 19l6 0" />
                        <path d="M14 5l-4 14" />
                    </svg>
                </x-button>
                <x-button title="Перечёркнутый (Ctrl+Shift+S)" size="icon" variant="none" @click="toggleStrike()"
                    ::class="{ '{{ $activeClasses }}': isActive('strike', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-strikethrough">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                        <path
                            d="M16 6.5a4 2 0 0 0 -4 -1.5h-1a3.5 3.5 0 0 0 0 7h2a3.5 3.5 0 0 1 0 7h-1.5a4 2 0 0 1 -4 -1.5" />
                    </svg>
                </x-button>
                <x-button title="Подчёркнутый (Ctrl+U)" size="icon" variant="none" @click="toggleUnderline()"
                    ::class="{ '{{ $activeClasses }}': isActive('underline', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-underline">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                        <path d="M5 19h14" />
                    </svg>
                </x-button>
                <x-dropdown :chevron="false" variant="button" :clickinsideclose="false">
                    <x-slot:trigger title="Ссылка" class="size-9" @click="getLinkUrl(); open = !open"
                        ::class="{ '{{ $activeClasses }}': isActive('link', updatedAt) }">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-link">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 15l6 -6" />
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
                            <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
                        </svg>
                    </x-slot:trigger>
                    <x-slot:wrapper>
                        <x-slot:content class="flex gap-2 border-0">
                            <x-input placeholder="Введите ссылку..." x-model="linkUrl" />
                            <x-button size="icon" variant="none" @click="setLink(); open = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </x-button>
                        </x-slot:content>
                    </x-slot:wrapper>
                </x-dropdown>
            </div>
            <div class="flex">
                <x-button title="Заголовок 1 уровня (Ctrl+Alt+1)" size="icon" variant="none"
                    @click="toggleHeading({ level: 1 })" ::class="{ '{{ $activeClasses }}': isActive('heading', { level: 1 }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-h-1">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19 18v-8l-2 2" />
                        <path d="M4 6v12" />
                        <path d="M12 6v12" />
                        <path d="M11 18h2" />
                        <path d="M3 18h2" />
                        <path d="M4 12h8" />
                        <path d="M3 6h2" />
                        <path d="M11 6h2" />
                    </svg>
                </x-button>
                <x-button title="Заголовок 2 уровня (Ctrl+Alt+2)" size="icon" variant="none"
                    @click="toggleHeading({ level: 2 })" ::class="{ '{{ $activeClasses }}': isActive('heading', { level: 2 }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-h-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 12a2 2 0 1 1 4 0c0 .591 -.417 1.318 -.816 1.858l-3.184 4.143l4 0" />
                        <path d="M4 6v12" />
                        <path d="M12 6v12" />
                        <path d="M11 18h2" />
                        <path d="M3 18h2" />
                        <path d="M4 12h8" />
                        <path d="M3 6h2" />
                        <path d="M11 6h2" />
                    </svg>
                </x-button>
                <x-button title="Заголовок 3 уровня (Ctrl+Alt+3)" size="icon" variant="none"
                    @click="toggleHeading({ level: 3 })" ::class="{ '{{ $activeClasses }}': isActive('heading', { level: 3 }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-h-3">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19 14a2 2 0 1 0 -2 -2" />
                        <path d="M17 16a2 2 0 1 0 2 -2" />
                        <path d="M4 6v12" />
                        <path d="M12 6v12" />
                        <path d="M11 18h2" />
                        <path d="M3 18h2" />
                        <path d="M4 12h8" />
                        <path d="M3 6h2" />
                        <path d="M11 6h2" />
                    </svg>
                </x-button>
                <x-button title="Заголовок 4 уровня (Ctrl+Alt+4)" size="icon" variant="none"
                    @click="toggleHeading({ level: 4 })" ::class="{ '{{ $activeClasses }}': isActive('heading', { level: 4 }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-h-4">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20 18v-8l-4 6h5" />
                        <path d="M4 6v12" />
                        <path d="M12 6v12" />
                        <path d="M11 18h2" />
                        <path d="M3 18h2" />
                        <path d="M4 12h8" />
                        <path d="M3 6h2" />
                        <path d="M11 6h2" />
                    </svg>
                </x-button>
                <x-button title="Заголовок 5 уровня (Ctrl+Alt+5)" size="icon" variant="none"
                    @click="toggleHeading({ level: 5 })" ::class="{ '{{ $activeClasses }}': isActive('heading', { level: 5 }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-h-5">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M17 18h2a2 2 0 1 0 0 -4h-2v-4h4" />
                        <path d="M4 6v12" />
                        <path d="M12 6v12" />
                        <path d="M11 18h2" />
                        <path d="M3 18h2" />
                        <path d="M4 12h8" />
                        <path d="M3 6h2" />
                        <path d="M11 6h2" />
                    </svg>
                </x-button>
                <x-button title="Маркированный список (Ctrl+Shift+8)" size="icon" variant="none"
                    @click="toggleBulletList()" ::class="{ '{{ $activeClasses }}': isActive('bulletList', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 6l11 0" />
                        <path d="M9 12l11 0" />
                        <path d="M9 18l11 0" />
                        <path d="M5 6l0 .01" />
                        <path d="M5 12l0 .01" />
                        <path d="M5 18l0 .01" />
                    </svg>
                </x-button>
                <x-button title="Нумерованный список (Ctrl+Shift+7)" size="icon" variant="none"
                    @click="toggleOrderedList()" ::class="{ '{{ $activeClasses }}': isActive('orderedList', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-list-numbers">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 6h9" />
                        <path d="M11 12h9" />
                        <path d="M12 18h8" />
                        <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4" />
                        <path d="M6 10v-6l-2 2" />
                    </svg>
                </x-button>
                <x-button title="Цитата (Ctrl+Shift+B)" size="icon" variant="none" @click="toggleBlockquote()"
                    ::class="{ '{{ $activeClasses }}': isActive('blockquote', updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-blockquote">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 15h15" />
                        <path d="M21 19h-15" />
                        <path d="M15 11h6" />
                        <path d="M21 7h-6" />
                        <path d="M9 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />
                        <path d="M3 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2" />
                    </svg>
                </x-button>
            </div>
            <div class="flex">
                <x-button title="Выравнивание по левому краю (Ctrl+Shift+L)" size="icon" variant="none"
                    @click="setTextAlign('left')" ::class="{ '{{ $activeClasses }}': isActive({ textAlign: 'left' }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-align-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M4 12l10 0" />
                        <path d="M4 18l14 0" />
                    </svg>
                </x-button>
                <x-button title="Выравнивание по центру (Ctrl+Shift+E)" size="icon" variant="none"
                    @click="setTextAlign('center')" ::class="{ '{{ $activeClasses }}': isActive({ textAlign: 'center' }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-align-center">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M8 12l8 0" />
                        <path d="M6 18l12 0" />
                    </svg>
                </x-button>
                <x-button title="Выравнивание по правому краю (Ctrl+Shift+R)" size="icon" variant="none"
                    @click="setTextAlign('right')" ::class="{ '{{ $activeClasses }}': isActive({ textAlign: 'right' }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-align-right">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M10 12l10 0" />
                        <path d="M6 18l14 0" />
                    </svg>
                </x-button>
                <x-button title="Выравнивание по ширине (Ctrl+Shift+J)" size="icon" variant="none"
                    @click="setTextAlign('justify')" ::class="{ '{{ $activeClasses }}': isActive({ textAlign: 'justify' }, updatedAt) }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-align-justified">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l12 0" />
                    </svg>
                </x-button>
            </div>
            <div class="flex">
                <x-button title="Изображение" size="icon" variant="none" @click="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-photo">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>
                </x-button>
            </div>
        </div>
    </template>

    <div x-ref="element"></div>
</div>

@pushOnce('scripts')
    @vite(['resources/js/tiptap-editor.js'])
@endPushOnce
