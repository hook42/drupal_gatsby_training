import React from "react"
import { Link } from "gatsby"
import { withPrefix } from 'gatsby'
import Img from "gatsby-image"


const RecipeTeaser = ({imgFluid, recipeTitle, recipeDate, recipeSummary, recipeSlug}) => (
  <div>
    <Img
      style={{
        maxWidth: '500px',
      }}
      fluid={imgFluid}
    />
    <Link to={recipeSlug}>
      <h2>{recipeTitle}</h2>
    </Link>
    <p>{recipeDate}</p>
    <p>{recipeSummary}</p>
  </div>
)

export default RecipeTeaser
