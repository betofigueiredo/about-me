import { createRootRoute, Outlet } from "@tanstack/react-router";
import Menu from "../components/Menu";
// import { TanStackRouterDevtools } from "@tanstack/router-devtools";

export const Route = createRootRoute({
  component: () => (
    <div className="container mx-auto text-left">
      <Menu />
      <Outlet />
      {/* <TanStackRouterDevtools /> */}
    </div>
  ),
});
