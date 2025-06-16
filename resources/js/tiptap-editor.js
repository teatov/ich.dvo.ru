import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";

document.addEventListener("alpine:init", () => {
    Alpine.data("editor", (content) => {
        let editor;

        return {
            updatedAt: Date.now(),
            init() {
                const _this = this;

                editor = new Editor({
                    element: this.$refs.element,
                    extensions: [StarterKit],
                    content: content,
                    onCreate({ editor }) {
                        _this.updatedAt = Date.now();
                    },
                    onUpdate({ editor }) {
                        _this.updatedAt = Date.now();
                    },
                    onSelectionUpdate({ editor }) {
                        _this.updatedAt = Date.now();
                    },
                });
            },
            isLoaded() {
                return editor;
            },
            isActive(type, opts = {}) {
                return editor.isActive(type, opts);
            },
            toggleHeading(opts) {
                editor.chain().toggleHeading(opts).focus().run();
            },
            toggleBold() {
                editor.chain().focus().toggleBold().run();
            },
            toggleItalic() {
                editor.chain().toggleItalic().focus().run();
            },
        };
    });
});
