import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import Typography from "@tiptap/extension-typography";
import TextAlign from "@tiptap/extension-text-align";
import Image from "@tiptap/extension-image";
import Underline from "@tiptap/extension-underline";
import Link from "@tiptap/extension-link";

document.addEventListener("alpine:init", () => {
    Alpine.data("editor", (content) => {
        let editor;

        return {
            updatedAt: Date.now(),
            init() {
                const _this = this;

                editor = new Editor({
                    element: this.$refs.element,
                    extensions: [
                        StarterKit,
                        Typography,
                        TextAlign.configure({
                            types: ["heading", "paragraph"],
                        }),
                        Image,
                        Underline,
                        Link.configure({ openOnClick: false }),
                    ],
                    content: content,
                    editorProps: {
                        attributes: {
                            class: "p-2 border rounded block w-full prose",
                        },
                    },
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
            canUndo() {
                return editor.can().undo();
            },
            canRedo() {
                return editor.can().redo();
            },
            undoStep() {
                editor.chain().undo().focus().run();
            },
            redoStep() {
                editor.chain().redo().focus().run();
            },
            toggleBold() {
                editor.chain().focus().toggleBold().run();
            },
            toggleItalic() {
                editor.chain().focus().toggleItalic().run();
            },
            toggleStrike() {
                editor.chain().focus().toggleStrike().run();
            },
            toggleUnderline() {
                editor.chain().focus().toggleUnderline().run();
            },
            linkUrl: "",
            getLinkUrl() {
                const url = editor.getAttributes("link").href;
                if (url) {
                    this.linkUrl = url;
                }
            },
            setLink() {
                const url = this.linkUrl;

                if (url === null) {
                    return;
                }

                if (url === "") {
                    editor
                        .chain()
                        .focus()
                        .extendMarkRange("link")
                        .unsetLink()
                        .run();

                    return;
                }

                editor
                    .chain()
                    .focus()
                    .extendMarkRange("link")
                    .setLink({ href: url })
                    .run();

                this.linkUrl = "";
            },
            toggleHeading(opts) {
                editor.chain().focus().toggleHeading(opts).run();
            },
            toggleBulletList() {
                editor.chain().focus().toggleBulletList().run();
            },
            toggleOrderedList() {
                editor.chain().focus().toggleOrderedList().run();
            },
            toggleBlockquote() {
                editor.chain().focus().toggleBlockquote().run();
            },
            setTextAlign(opts) {
                editor.chain().focus().setTextAlign(opts).run();
            },
            getHTML() {
                return editor.getHTML();
            },
        };
    });
});
