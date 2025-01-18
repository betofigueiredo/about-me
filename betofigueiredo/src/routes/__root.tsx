import { createRootRoute, Outlet } from "@tanstack/react-router";
import Menu from "../components/Menu";
// import { TanStackRouterDevtools } from "@tanstack/router-devtools";

export const Route = createRootRoute({
  component: () => {
    const year = new Date().getFullYear();

    return (
      <div className="container mx-auto text-left">
        <Menu />
        <Outlet />
        {/* <TanStackRouterDevtools /> */}
        <div className="container mt-52 mb-10 text-center">
          © {year} Beto Figueiredo.
        </div>
      </div>
    );
  },
});
