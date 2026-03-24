export default function Home({ nbLignes, setNbLignes, onStart }) {
  return (
    <div className="home">
      <div className="formContainer">

        <label>
          Nombre de lignes : {nbLignes}
          <input
            type="range"
            min="3"
            max="5"
            className="slider"
            value={nbLignes}
            onChange={(e) => setNbLignes(Number(e.target.value))}
          />
        </label>

        <div className="preview-lignes">
          {Array.from({ length: nbLignes }).map((_, i) => (
            <div key={i} className="baton"></div>
          ))}
        </div>

      </div>
    </div>
  );
}
