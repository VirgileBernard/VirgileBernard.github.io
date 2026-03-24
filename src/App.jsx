import { useState } from "react";
import Home from "./components/Home";
import Game from "./components/Game";
import Layout from "./components/Layout";
import ActionBar from "./components/ActionBar";

export default function App() {
  const [nbPiles, setNbPiles] = useState(null);
  const [pendingLignes, setPendingLignes] = useState(3); // valeur du slider

  return (
    <Layout>
      {nbPiles === null ? (
        <>
          <Home 
            nbLignes={pendingLignes}
            setNbLignes={setPendingLignes}
            onStart={() => setNbPiles(pendingLignes)}
          />

          <ActionBar>
            <button className="btn" onClick={() => setNbPiles(pendingLignes)}>
              Jouer
            </button>
          </ActionBar>
        </>
      ) : (
        <>
          <Game nbPiles={nbPiles} />

          <ActionBar>
            <button className="btn" onClick={() => window.location.reload()}>
              Recommencer
            </button>
          </ActionBar>
        </>
      )}
    </Layout>
  );
}
