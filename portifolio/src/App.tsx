import Anim from "./Anim";

function App() {
  const mainLinks: string[] = [
    "Introduction",
    "Work experience",
    "Goals",
    "Expectations",
    "Strength",
    "Weaknesses",
  ];

  return (
    <div>
      <div>Header</div>
      <div>
        {mainLinks.map((link) => (
          <span key={link} className="font-serif text-[105px] text-[#EBEEF1]">
            <a href="#">{link}</a> <span className="text-[#676C71]">/</span>
            &nbsp;
          </span>
        ))}
      </div>
      <Anim />
      <div>Github</div>
    </div>
  );
}

export default App;
