@if (false)
    <{{ $tag }} {{ $attributes }}>
        {{ $text }}
        </{{ $tag }}>
    @else
        <{{ $tag }} {{ $attributes->twMerge(['class' => 'relative hover:underline decoration-dashed']) }}
            x-data="{
                key: `{{ $key }}`,
                origText: `{{ $text }}`,
                newText: null,
                error: null,
                isEditing: false,
                delay: false,
                edit: function() {
                    this.isEditing = true;
                },
                focus: function() {
                    const textInput = this.$refs.textInput;
                    textInput.focus();
                    textInput.select();
                },
                save: async function() {
                    if (!this.newText) {
                        this.newText = this.origText;
                        return;
                    }
                    this.isEditing = false;
                    this.delay = true;
                    const response = await fetch('/api/edit-text', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ key: this.key, text: this.newText })
                    });
                    const data = await response.json();
                    console.log(data);
                    if (data.error) {
                        this.error = data.error;
                        this.newText = this.origText;
                        this.delay = false;
                        return;
                    }
                    this.newText = data.newText;
                    this.origText = this.newText;
                    this.delay = false;
                },
                cancel: function() {
                    this.newText = this.origText;
                    this.isEditing = false;
                },
            }" x-init="newText = origText">
            <span :class="isEditing ? 'invisible' : 'cursor-pointer'" x-text="origText"
                @click="edit(); $nextTick(() => focus())"></span>
            <textarea x-show="isEditing" x-ref="textInput" x-model="newText" @keydown.enter.prevent="save" @keydown.escape="cancel"
                class="absolute inset-0 outline outline-2 outline-offset-2 outline-neutral focus:outline-primary min-h-4"></textarea>
            <span x-show="isEditing" class="absolute -top-7 right-0 block bg-background px-2 text-sm">
                <kbd>Enter</kbd> - сохранить, <kbd>Esc</kbd> - отменить
            </span>
            <span x-show="isEditing"
                class="absolute -top-7 left-0 block bg-background px-2 font-mono text-sm text-neutral-darker">
                {{ $key }}
            </span>
            <span x-show=delay class="absolute -top-7 right-0 flex items-center bg-background text-sm">
                <x-icon.loader class="inline animate-spin" /> Сохранение...
            </span>
            <span x-show="error" x-text="error"
                class="absolute -bottom-7 right-0 block bg-background px-2 font-mono text-sm text-error">
            </span>
            </{{ $tag }}>
@endif
