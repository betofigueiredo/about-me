import { ReactElement, useEffect, useRef, useState } from "react";
import { allowedKeys } from "./allowedKeys";
import { actions } from "./commands/actions";
import useWelcomeAutoStart from "./hooks/useWelcomeAutoStart";
import Caret from "./components/Caret";

function App() {
  const [typed, setTyped] = useState<string>("");
  const [commands, setCommands] = useState<ReactElement[]>([]);
  const [history, setHistory] = useState<string[]>([]);
  const savedCallback = useRef<(e: KeyboardEvent) => void>();

  // useWelcomeAutoStart({ setTyped, setCommands });

  // TODO: ArrowTop get last command
  // TODO: placeholder on the start

  useEffect(() => {}, []);

  function callback(e: KeyboardEvent) {
    e.preventDefault();
    if (e.key === "ArrowUp" && typed === "") {
      const lastTyped = history[history.length - 1];
      setTyped(lastTyped);
      return;
    }
    if (!allowedKeys.includes(e.key)) return;
    if (e.key === "Backspace") {
      setTyped((prev) => prev.slice(0, -1));
      return;
    }
    if (e.key === "Enter") {
      setHistory((prev) => [...prev, typed]);
      if (typed === "clear") {
        setCommands([]);
        setTyped("");
        return;
      }
      const action = actions(typed);
      setCommands((prev) => [...prev, action]);
      setTyped("");
      return;
    }
    setTyped((prev) => prev + e.key);
  }

  useEffect(() => {
    savedCallback.current = callback;
    window.scrollTo(0, document.body.scrollHeight);
  });

  useEffect(() => {
    function handleKeyDown(e: KeyboardEvent) {
      if (savedCallback.current) {
        savedCallback.current(e);
      }
    }

    document.addEventListener("keydown", handleKeyDown);
    return () => {
      document.removeEventListener("keydown", handleKeyDown);
    };
  }, []);

  return (
    <div className="container p-12 font-mono">
      <div className="relative inline w-auto text-xl">
        {commands.map((command, index) => (
          <div key={index}>{command}</div>
        ))}
      </div>
      <div className="relative inline w-auto text-xl">
        <Caret />
        {typed}
        <div className="absolute top-[1px] right-[-9px] w-2 h-6 bg-slate-500 animate-cursor-blink" />
      </div>
    </div>
  );
}

export default App;
