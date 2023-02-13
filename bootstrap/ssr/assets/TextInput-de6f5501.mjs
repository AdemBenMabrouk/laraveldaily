import { a as jsx } from "../ssr.mjs";
import { forwardRef, useRef, useEffect } from "react";
function InputError({ message, className = "" }) {
  return message ? /* @__PURE__ */ jsx("p", { className: "text-sm text-red-600 dark:text-red-400 " + className, children: message }) : null;
}
const TextInput = forwardRef(function TextInput2({ type = "text", name, id, value, className, autoComplete, required, isFocused, handleChange }, ref) {
  const input = ref ? ref : useRef();
  useEffect(() => {
    if (isFocused) {
      input.current.focus();
    }
  }, []);
  return /* @__PURE__ */ jsx("div", { className: "flex flex-col items-start", children: /* @__PURE__ */ jsx(
    "input",
    {
      type,
      name,
      id,
      value,
      className: `border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm ` + className,
      ref: input,
      autoComplete,
      required,
      onChange: (e) => handleChange(e)
    }
  ) });
});
export {
  InputError as I,
  TextInput as T
};
