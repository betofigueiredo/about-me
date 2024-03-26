import { useEffect } from "react";
import { actions } from "../actions";

const useWelcomeAutoStart = ({
  setTyped,
  setCommands,
}: {
  setTyped: (value: React.SetStateAction<string>) => void;
  setCommands: (value: React.SetStateAction<React.ReactElement[]>) => void;
}): void => {
  useEffect(() => {
    setTimeout(() => setTyped((prev) => prev + "w"), 300);
    setTimeout(() => setTyped((prev) => prev + "e"), 400);
    setTimeout(() => setTyped((prev) => prev + "l"), 580);
    setTimeout(() => setTyped((prev) => prev + "c"), 900);
    setTimeout(() => setTyped((prev) => prev + "o"), 1000);
    setTimeout(() => setTyped((prev) => prev + "m"), 1100);
    setTimeout(() => setTyped((prev) => prev + "e"), 1200);
    setTimeout(() => {
      const action = actions("help");
      setCommands((prev) => [...prev, action]);
      setTyped("");
    }, 3000);
  }, []);
};

export default useWelcomeAutoStart;
