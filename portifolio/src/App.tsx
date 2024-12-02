import Anim from "./Anim";
import Division from "./components/division";
import Header from "./components/header";
import MainLinks from "./components/main-links";

const App = () => (
  <div className="container mx-auto">
    <Header />
    <Division />
    <MainLinks />
    <Division />
    {/* <Anim /> */}
    <div>Github</div>
  </div>
);

export default App;
