import { useEffect } from "react";
import { actions } from "../commands/actions";

const useWelcomeAutoStart = ({
  setTyped,
  setCommands,
}: {
  setTyped: (value: React.SetStateAction<string>) => void;
  setCommands: (value: React.SetStateAction<React.ReactElement[]>) => void;
}): void => {
  useEffect(() => {
    setTimeout(() => setTyped((prev) => prev + "a"), 300);
    setTimeout(() => setTyped((prev) => prev + "b"), 400);
    setTimeout(() => setTyped((prev) => prev + "o"), 580);
    setTimeout(() => setTyped((prev) => prev + "u"), 900);
    setTimeout(() => setTyped((prev) => prev + "t"), 1000);
    setTimeout(() => {
      const action = actions("about");
      setCommands((prev) => [...prev, action]);
      setTyped("");
    }, 2500);
  }, []);
};

export default useWelcomeAutoStart;
