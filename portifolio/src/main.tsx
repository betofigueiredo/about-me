import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "@fontsource-variable/crimson-pro";
import "@fontsource-variable/inter";
import "./index.css";
import App from "./App.tsx";

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    <App />
  </StrictMode>
);
